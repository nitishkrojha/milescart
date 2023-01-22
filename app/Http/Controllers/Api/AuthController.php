<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Mail;
use App\Models\Customer;
use App\Models\AccessToken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Mail\WelcomeEmail;
use Illuminate\Http\JsonResponse;


class AuthController extends Controller
{
    // Register a new customer
    public function register(Request $request)
    {

        $step = $request->step;
        if ($step == 1) {


            // Validate the request data
            $validator = Validator::make($request->all(), [
                'email' => 'bail|required|string|email|max:255|unique:customers',
                'password' => 'bail|required|string|min:6',
                'login_type' => 'bail|required|string|in:manual,facebook,google',
                'step' => 'bail|required|string',
            ]);

            if ($validator->fails()) {
                // return response()->json(['errors' => $validator->errors()], 422);

                return response()->json([
                    'status' => false,
                    'message' => 'Registration Failed',
                    'reason' => $validator->errors(),
                ], 422);
            }


            $endTime  = Carbon::now()->addMinutes(2);
            // Create a new customer instance
            $customer = new Customer();
            $customer->email = $request->email;
            $customer->password = Hash::make($request->password);
            $customer->login_type = $request->login_type;
            $customer->email_otp = '1234';
            $customer->sms_otp = '1234';
            $customer->email_otp_expire_at = $endTime;
            $customer->sms_otp_expire_at = $endTime;

            $login_type = $request->login_type;
            if ($login_type == 'manual') {
                $customer->status = 'not verified';
                $customer->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Profile Registered & OTP send on Email ID',
                    'access_token' => null,
                ], 200);
            } else {
                $customer->status = 'active';
                $customer->save();
                $access_token = $this->generateAccessToken($customer);
                return response()->json([

                    'status' => true,
                    'message' => 'Profile Registered & OTP send on Email ID',
                    'access_token' => $access_token->original['access_token'],

                ], 200);
            }
        }
        if ($step == 2) {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'username' => 'bail|required|string|max:255',
                'phone' => 'bail|required|string|max:255',
                'dob' => 'bail|required|string',
                'gender' => 'bail|required|string',
                'weight' => 'bail|required|numeric',
                'height' => 'bail|required|numeric',
                'access_token' => 'bail|required|string',
                'profile_picture' => 'bail|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                // return response()->json(['errors' => $validator->errors()], 422);

                return response()->json([
                    'status' => false,
                    'message' => 'Registration Failed',
                    'reason' => $validator->errors(),
                ], 422);
            }
            $token    = $this->verifyToken($request->access_token);
            if ($token->original['status'] == false) {
                return response()->json([
                    'status' => false,
                    'message' => 'Inavlid Access Token',
                ], 401);
            } else {
                $customer = Customer::where('id', $token->original['data']->name)->first();
                if (!$customer) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Customer Not Found'
                    ], 401);
                }
            }


            $endTime  = Carbon::now()->addMinutes(2);
            $customer->setAttribute('username', $request->username);
            $customer->setAttribute('dob', $request->dob);
            $customer->setAttribute('gender', $request->gender);
            $customer->setAttribute('weight', $request->weight);
            $customer->setAttribute('height', $request->height);
            $customer->setAttribute('phone', $request->phone);
            $customer->setAttribute('status', 'active');

            // If a profile picture was included, store it
            if ($request->hasFile('profile_picture')) {
                $customer->setAttribute('profile_picture', $request->profile_picture->store('customers'));
            }

            // Save the customer to the database
            $customer->save();
            return response()->json([
                'status' => true,
                'message' => 'Profile Updated successfully',
                'user' => $customer,
            ], 200);
        }
    }




    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'bail|required|string|email',
            'password' => 'bail|required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Login Failed',
                'reason' => $validator->errors(),
            ], 422);
        }

        // Find the customer with the specified email or phone number
        $customer = Customer::where('email', $request->email)->where('status', 'active')->first();
        if (!$customer || !Hash::check($request->password, $customer->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Login Failed',
                'reason' => 'unauthorized',
            ], 422);
        }


        $access_token = $this->generateAccessToken($customer);
        return response()->json([
            'status' => true,
            'message' => 'User Logged in successfully',
            'user' => $customer,
            'access_token' => $access_token,
        ], 200);
    }


    public function verifyEmailOTP(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'bail|required|string|email',
            'otp' => 'bail|required|string|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Verification Failed',
                'reason' => $validator->errors(),
            ], 422);
        }

        // Find the customer with the specified email or phone number
        $customer = Customer::where('email', $request->email)->where('email_otp', $request->otp)->where('email_otp_expire_at', '>=', Carbon::now()->addSecond())->first();

        if (!$customer) {
            return response()->json([
                'status' => false,
                'message' => 'Verification Failed',
            ], 422);
        }
        $customer->setAttribute('status', 'active');
        // Save the customer to the database
        $customer->save();

        $access_token = $this->generateAccessToken($customer);
        return response()->json([
            'status' => true,
            'message' => 'OTP Verified',
            'access_token' => $access_token,
        ], 200);
    }




    // Generate an access token for a given customer
    private function generateAccessToken(Customer $customer)
    {
        // Generate a new token
        $token = $customer->createToken($customer->id);
        // Return the access token and the customer's details
        return response()->json([
            'access_token' => $token->plainTextToken,
        ]);
    }



    public function getProfile(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'access_token' => 'bail|required|string',
        ]);

        if ($validator->fails()) {
            // return response()->json($validator->errors(), 400);
            return response()->json([
                'status' => true,
                'message' => 'Fetching Failed',
                'reason' => $validator->errors(),
            ], 422);
        }

        // Check if the access token belongs to the customer
        $token    = $this->verifyToken($request->access_token);

        if ($token->original['status'] == false) {
            return response()->json([
                'status' => false,
                'message' => 'Inavlid Access Token',
            ], 401);
        } else {
            $customer = Customer::where('id', $token->original['data']->name)->first();
            if (!$customer) {
                return response()->json([
                    'status' => false,
                    'message' => 'Customer Not Found'
                ], 401);
            }
        }

        // Return the customer profile
        return response()->json([
            'status' => true,
            'message' => 'Profile fetched successfully',
            'customer' => $customer,
        ], 200);
    }


    public function updateProfile(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'access_token' => 'required|string',
            'username' => 'string|max:255',
            'dob' => 'date',
            'weight' => 'numeric',
            'height' => 'numeric',
            'profile_picture' => 'image|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $token    = $this->verifyToken($request->access_token);
        if ($token->original['status'] == false) {
            return response()->json([
                'status' => false,
                'message' => 'Inavlid Access Token',
            ], 401);
        } else {
            $customer = Customer::where('id', $token->original['data']->name)->first();
            if (!$customer) {
                return response()->json([
                    'status' => false,
                    'message' => 'Customer Not Found'
                ], 401);
            }
        }

        $customer->setAttribute('username', $request->username);
        $customer->setAttribute('dob', $request->dob);
        $customer->setAttribute('weight', $request->weight);
        $customer->setAttribute('height', $request->height);

        // Upload the profile picture if provided
        if ($request->hasFile('profile_picture')) {
            $customer->profile_picture = $request->profile_picture->store('profile_pictures');
        }

        $customer->save();

        // Return the updated customer profile
        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully',
            'customer' => $customer['customer'],
        ], 200);
    }



    public function updatePassword(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'access_token' => 'bail|required|string',
            'current_password' => 'bail|required|string',
            'new_password' => 'bail|required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Check if the access token is valid
        $token    = $this->verifyToken($request->access_token);
        if ($token->original['status'] == false) {
            return response()->json([
                'status' => false,
                'message' => 'Inavlid Access Token',
            ], 401);
        } else {
            $customer = Customer::where('id', $token->original['data']->name)->first();
            if (!$customer) {
                return response()->json([
                    'status' => false,
                    'message' => 'Customer Not Found'
                ], 401);
            }
        }

        // Check if the current password is correct
        if (!Hash::check(Hash::make($request->current_password), $customer->password)) {
            return response()->json([
                'message' => 'Invalid current password'
            ], 422);
        }

        // Update the customer's password
        $customer->setAttribute('password', Hash::make($request->new_password));

        $customer->save();

        return response()->json([
            'status' => true,
            'message' => 'Password updated successfully'
        ]);
    }

    public function resendEmailOTP(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'bail|required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Check if the access token is valid
        $customer = Customer::where('email', $request->email)->first();
        if (!$customer) {
            return response()->json([
                'status' => false,
                'message' => 'Customer Not Found'
            ], 401);
        }

        $endTime  = Carbon::now()->addMinutes(2);

        // Update the customer's email OTP
        $customer->setAttribute('email_otp', '1234');
        $customer->setAttribute('email_otp_expire_at', $endTime);


        $customer->save();

        return response()->json([
            'status' => true,
            'message' => 'OTP Sent Successfully'
        ]);
    }


    public function resetPassword(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'access_token' => 'bail|required|string',
            'new_password' => 'bail|required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Check if the access token is valid
        $token    = $this->verifyToken($request->access_token);
        if ($token->original['status'] == false) {
            return response()->json([
                'status' => false,
                'message' => 'Inavlid Access Token',
            ], 401);
        } else {
            $customer = Customer::where('id', $token->original['data']->name)->first();
            if (!$customer) {
                return response()->json([
                    'status' => false,
                    'message' => 'Customer Not Found'
                ], 401);
            }
        }

        // Update the customer's password
        $customer->setAttribute('password', Hash::make($request->new_password));

        $customer->save();


        return response()->json([
            'status' => true,
            'message' => 'Password Reset Successfully'
        ]);
    }



    public function verifyToken($access_token)
    {
        // Verify the access token
        $token = AccessToken::where('token', $access_token)->first();
        if (!$token) {
            return response()->json([
                'status' => false,
                'data' => $token,
                'message' => 'Invalid access token'
            ], 401);
        }

        return response()->json([
            'status' => true,
            'data' => $token,
            'message' => 'Token Found'
        ], 404);
    }
}

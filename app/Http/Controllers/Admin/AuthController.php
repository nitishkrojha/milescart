<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function showForgotForm()
    {
        return view('admin.forgot');
    }
    public function showResetForm(Request $request)
    {
        $key = $request->key;
        $data = User::select('password_reset_token', 'email')->where('password_reset_token', $key)->first();
        if ($data == '') {
            return " 505 | Opps.. Token Expired!";
        }
        return view('admin.reset', ['data' => $data]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // echo 'success';
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function passwordReset(Request $request)
    {
        try {
            $data = $request->input();
            $validate_email = User::where('email', $data['email'])->first();
            if ($validate_email != '') {
                $token = Str::random(60);
                $validate_email->forceFill([
                    'password_reset_token' => ($token),
                    'password_reset_at' => Carbon::now(),
                ])->save();
                Mail::to($data['email'])->send(new ForgotPasswordMail($token));
                return redirect()->back()->with(['success' => "A Password Reset Link has been sent to your email successfully!"]);
            } else {
                return redirect()->back()->with(['fail' => "Entered Email is not Registered!"]);
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function  authReset()
    {
        return view('admin.forgot');
    }

    public function authPasswordReset(Request $request)
    {
        if ($request->method() == "GET") {
            $key = $request->key;
            $data = User::select('password_reset_token', 'email')->where('password_reset_token', $key)->first();
            if ($data == '') {
                return " 505 | Opps! Token Expired!";
            }
            return view('admin.reset', ['data' => $data]);
        }

        if ($request->method() == "POST") {
            $request->validate([
                'password' => [
                    'required',
                    'string',
                    'min:8',
                ],
                'password_confirm' => 'required_with:password|same:password|min:8'
            ]);

            $data = User::where('email', $request->email)->update([
                'password' => Hash::make($request->password),
                'password_reset_token' => '',
                'updated_at' => Carbon::now('Asia/Kolkata')
            ]);
            return redirect('admin.login')->with('success', 'Your Password has been changed successfully! you can login now.');
        }
    }


    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}

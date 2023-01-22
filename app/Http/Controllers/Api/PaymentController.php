<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Models\Customer;
use App\Models\AccessToken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Razorpay;


class PaymentController extends Controller
{

    public function subscribe(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'event_id' => 'required|exists:events,id',
            'customer_id' => 'required|exists:customers,id',
        ]);

        // Get the event and customer objects
        $event = Event::find($request->event_id);
        $customer = Customer::find($request->customer_id);

        // Check if the event is a paid event
        if ($event->mode == 'paid') {
            // Initialize Razorpay client
            $razorpay = new Razorpay();
            $razorpay->key_id = config('razorpay.key_id');
            $razorpay->key_secret = config('razorpay.key_secret');

            // Create an order
            $orderData = [
                'receipt' => 'order_' . time(),
                'amount' => $event->entry_fee * 100, // Razorpay requires amount in paise
                'currency' => 'INR',
                'payment_capture' => 1, // automatically capture the payment
            ];
            $razorpayOrder = $razorpay->orders->create($orderData);

            // Get the payment options
            $paymentOptions = [
                'amount' => $event->entry_fee * 100, // razorpay requires amount in paise
                'currency' => 'INR',
                'order_id' => $razorpayOrder['id'],
            ];

            // Create a payment
            $razorpayPayment = $razorpay->payment->create($paymentOptions);

            // Save the payment details in the database
            $payment = new Payment();
            $payment->event_id = $event->id;
            $payment->customer_id = $customer->id;
            $payment->order_id = $razorpayOrder['id'];
            $payment->payment_id = $razorpayPayment['id'];
            $payment->amount = $event->entry_fee;
            $payment->currency = 'INR';
            $payment->status = $razorpayPayment['status'];
            $payment->save();

            // Return the payment details and Razorpay checkout form
            return response()->json([
                'payment' => $payment,
                'razorpay_form' => [
                    'key' => config('razorpay.key_id'),
                    'amount' => $event->entry_fee * 100, // razorpay requires amount in paise
                    'name' => $event->name,
                    'description' => 'Subscription fee for ' . $event->name,
                    'image' => $event->thumbnail_image,
                    'order_id' => $razorpayOrder['id'],
                    'handler' => route('subscription.callback'),
                    'prefill' => [
                        'name' => $customer->name,
                        'email' => $customer->email,
                    ],
                ],
            ]);
        } else {

            return response()->json([
                'message' => 'You can not subscribe this event'
            ], 422);
        }
    }
}

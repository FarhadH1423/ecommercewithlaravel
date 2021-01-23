<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        $total = Cart::sum('sub_total');
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('use-your-stripe-key-here');
        		
		$amount = $total;
		// $amount *= 100;
        // $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'USD',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
        
		return view('order.checkout',compact('intent'));

    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
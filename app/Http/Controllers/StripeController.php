<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Unlimited Transcriptions',
                    ],
                    'unit_amount' => 4900, // $49.00
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        $user = auth()->user();
        $user->is_subscriber = true;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Payment successful! You now have unlimited transcriptions.');
    }

    public function cancel()
    {
        return redirect()->route('dashboard')->with('error', 'Payment cancelled.');
    }
}
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

        $user = auth()->user();

        $session = Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $user->email, // Preset the user's email
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Unlimited Transcriptions',
                        'description' => 'Lifetime access to unlimited transcriptions with Vocaldo',
                    ],
                    'unit_amount' => 2900, // $29.00
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'allow_promotion_codes' => true, // Enable promo code field
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
            'metadata' => [
                'user_id' => $user->id,
            ],
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
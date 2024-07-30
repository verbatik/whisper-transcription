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
        $plan = $request->input('plan');

        if ($plan === 'monthly') {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => $user->email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Monthly Unlimited Transcriptions',
                            'description' => 'Monthly subscription for unlimited transcriptions with Vocaldo',
                        ],
                        'unit_amount' => 500, // $5.00
                        'recurring' => [
                            'interval' => 'month',
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => route('stripe.success', ['plan' => 'monthly']),
                'cancel_url' => route('stripe.cancel'),
            ]);
        } else {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => $user->email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Lifetime Unlimited Transcriptions',
                            'description' => 'Lifetime access to unlimited transcriptions with Vocaldo',
                        ],
                        'unit_amount' => 2900, // $29.00
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('stripe.success', ['plan' => 'lifetime']),
                'cancel_url' => route('stripe.cancel'),
            ]);
        }

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        $user = auth()->user();
        $plan = $request->query('plan');

        if ($plan === 'monthly') {
            $user->subscription_type = 'monthly';
            $user->subscription_ends_at = now()->addMonth();
        } else {
            $user->subscription_type = 'lifetime';
            $user->subscription_ends_at = null;
        }

        $user->is_subscriber = true;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Payment successful! You now have unlimited transcriptions.');
    }

    public function cancel()
    {
        return redirect()->route('dashboard')->with('error', 'Payment cancelled.');
    }
}
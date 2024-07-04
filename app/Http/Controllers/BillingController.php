<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\BillingPortal\Session;
use Stripe\Customer;
use Stripe\Exception\ApiErrorException;

class BillingController extends Controller
{
    public function createPortalSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = $request->user();

        try {
            // If the user doesn't have a Stripe customer ID, create one
            if (!$user->stripe_id) {
                $customer = Customer::create([
                    'email' => $user->email,
                    'name' => $user->name,
                    // You can add more customer details here if needed
                ]);
                
                // Save the Stripe customer ID to the user
                $user->stripe_id = $customer->id;
                $user->save();
            }

            $session = Session::create([
                'customer' => $user->stripe_id,
                'return_url' => route('dashboard'),
            ]);

            return redirect($session->url);
        } catch (ApiErrorException $e) {
            // Log the error
            \Log::error('Stripe API error: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'Unable to access billing portal at this time. Please try again later.');
        }
    }
}
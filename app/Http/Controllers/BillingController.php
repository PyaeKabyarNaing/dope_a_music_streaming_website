<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function checkout(Request $request)
    {
        return $request->user()->checkout(['price_1SXzed5LxtxNJELsRSB1BhlK'], [
    'mode' => 'subscription',
    'success_url' => route('billing.success'),
    'cancel_url' => route('billing.cancel')
        ]);

        return redirect()->route('home')->with('success', 'You are now Premium User');
    }

    // public function success(Request $request)
    // {
    //     return view('checkout.success');
    // }

    public function cancel(Request $request)
    {
        return view('checkout.cancel');
    }
}

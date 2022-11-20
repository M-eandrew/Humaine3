<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Symfony\Component\HttpFoundation\Session\Session;

class DonorController extends Controller
{
    //
    public function returnadonationsview()
    {
        $distribution = Distribution::all();
        return view ('donor.donations.donations', compact('distribution'));
    }

    public function stripe()
    {
        return view('donor.donate.donate');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}

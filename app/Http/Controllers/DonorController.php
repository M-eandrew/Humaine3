<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Refugees;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Barryvdh\DomPDF\Facade\PDF;
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
    public function returndrefugeesview()
    {
        $refugee = Refugees::all();
        return view('donor.refugees.refugees', compact('refugee'));
    }
    public function print_refugees()
    {
        $refugee = Refugees::all();
        //return view('admin.rpdf', compact('refugee'));
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.refugees.rpdf', $data)->setPaper('a4', 'landscape');
        //$pdf = PDF::loadView('admin.rpdf', ['refugee' => $data])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('refugees.pdf');
    }
}

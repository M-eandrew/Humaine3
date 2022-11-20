<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Medical;
use App\Models\Refugees;
use App\Models\Relocation;
use App\Models\ReportsRequest;
use App\Models\ResourcesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $noofusers = User::count('id');
                $noofrefugeess = Refugees::count('id');
                $noofrrefugeess = Relocation::count('id');
                $noofdistributions = Distribution::count('id');
                $noofreportsrequests = ReportsRequest::count('id');
                $noofresourcesrequests = ResourcesRequest::count('id');
                $noofillnesses = Medical::count('id');
                return view('admin.main.home', compact(
                    'noofusers','noofrefugeess','noofrrefugeess','noofdistributions','noofreportsrequests','noofresourcesrequests','noofillnesses'));
            }
            
            elseif(Auth::user()->usertype == '0')
            {
                $refugee = Refugees::all();
                $noofrefugees = Refugees::count('id');
                $noofrrefugees = Relocation::count('id');
                //return view('worker.whome', compact('refugee', 'noofrefugees'));
                return view('humanitarian.main.home',compact('noofrefugees','refugee','noofrrefugees'));
            }
            else
            {
                $noofusers = User::count('id');
                $noofrefugeess = Refugees::count('id');
                $noofrrefugeess = Relocation::count('id');
                $noofdistributions = Distribution::count('id');
                return view('donor.main.home' , compact('noofusers','noofrefugeess','noofrrefugeess','noofdistributions'));
            }
        }
        else
        {
            return redirect()->back();
        }
    }

     public function index ()
    {
        //$refugee = Refugees::all();
        //$noofrefugees = Refugees::count('id');
        //return view('worker.whome', compact('refugee', 'noofrefugees'));
        return view('user.homes');
    } 

    public function donate ()
    {
        return view('donation.home');
    }

    public function profile()
    {
        $refugee = Refugees::all();
        return view('worker.profilehome', compact('refugee'));
    }

    public function worker_redirect()
    {
        $refugees = Refugees::all();
        return view('worker.bodyhome', compact('refugees'));
    }
}

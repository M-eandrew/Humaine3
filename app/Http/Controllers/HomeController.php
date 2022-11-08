<?php

namespace App\Http\Controllers;

use App\Models\Refugees;
use App\Models\Relocation;
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
                return view('admin.main.home', compact('noofusers','noofrefugeess','noofrrefugeess'));
            }
            /*elseif(Auth::user()->usertype == '0')
            {
                $refugee = Refugees::all();
                $noofrefugees = Refugees::count('id');
                return view('worker.whome', compact('refugee', 'noofrefugees'));
            }*/
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
                return view('donor.home');
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

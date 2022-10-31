<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refugees;
use App\Models\RelocatedRefugees;

class UserController extends Controller
{
    //
    public function addrefugeeview()
    {

        return view('humanitarian.add_refugee');
    }

    public function returnworkerhome()
    {
        $refugee = Refugees::all();
        $noofrefugees = Refugees::count('id');
        //return view('worker.whome', compact('refugee', 'noofrefugees'));
        return view('humanitarian.home', compact('noofrefugees','refugee'));
    }

    public function uploadrefugee(Request $request)
    {
        $refugee = new refugees;

        //Uploading the image
        $rphoto = $request->rphoto;
        $rphotoname = time().'.'.$rphoto->getClientoriginalExtension();
        $request->rphoto->move('refugeeimage',$rphotoname);
        $refugee->rphoto = $rphotoname;

        //rest of the data
        $refugee->name = $request->name;
        $refugee->country = $request->country;
        $refugee->bdate = $request->bdate;
        $refugee->idnum = $request->idnum;
        $refugee->phonenum = $request->phonenum;
        $refugee->camp = $request->camp;

        $refugee->save();
        return redirect()->back()->with('message','Person Added Successfully');
        //return view('worker.whome');

    }
    
    
}

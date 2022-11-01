<?php

namespace App\Http\Controllers;

use App\Models\Refugees;
use Illuminate\Http\Request;
use App\Models\Relocation;

class RelocateController extends Controller
{
    //
    public function relocatedrefugee()
    {
        $data = Refugees::pluck('country','country');
        $data1 = Refugees::pluck('bdate','id');
        $dataid = Refugees::pluck('idnum','id');
        $data2 = Refugees::pluck('name','id');
        return view('humanitarian.relocate_refugee', [
            'data' => $data,
            'data1' => $data1,
            'data2' => $data2,
            'dataid' => $dataid,
    ]);
    }

    public function uploadrelocated(Request $requests)
    {
        $refugee_relocate = new relocation;

        //Uploading the image
        $rphoto = $requests->rphoto;
        $rphotoname = time().'.'.$rphoto->getClientoriginalExtension();
        $requests->rphoto->move('refugeeimage',$rphotoname);
        $refugee_relocate->rphoto = $rphotoname;

        //rest of the data
        $refugee_relocate->name = $requests->name;
        $refugee_relocate->country = $requests->country;
        $refugee_relocate->bdate = $requests->bdate;
        $refugee_relocate->idnum = $requests->idnum;
        $refugee_relocate->phonenum = $requests->phonenum;
        $refugee_relocate->camp = $requests->camp;
        $refugee_relocate->rcountry = $requests->rcountry;

        $refugee_relocate->save();
        return redirect()->back()->with('message','Person Added Successfully');
    }
}

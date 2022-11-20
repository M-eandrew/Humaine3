<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Medical;
use Illuminate\Http\Request;
use App\Models\Refugees;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\RelocatedRefugees;
use App\Models\Relocation;
use App\Models\ReportsRequest;
use App\Models\ResourcesRequest;
use App\Models\User;
use PDF;


class  UserController extends Controller
{
    //
    public function addrefugeeview()
    {

        return view('humanitarian.addrefugee.add_refugee');
    }

    public function returnworkerhome()
    {
        $refugee = Refugees::all();
        $noofrefugees = Refugees::count('id');
        $noofrrefugees = Relocation::count('id');
        //return view('worker.whome', compact('refugee', 'noofrefugees'));
        return view('humanitarian.main.home', compact('noofrefugees','refugee','noofrrefugees'));
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
    public function generate ($id)
    {
        $refugee = refugees::findOrFail($id);
        $qr_string = $refugee->name." | ".$refugee->country." | ".$refugee->bdate;
        $qrcode = QrCode::size(400)->generate($qr_string);
        return view('admin.qr.qrcode',compact('qrcode'));
    }
    public function generateuser ($iduser)
    {
        $user = User::findOrFail($iduser);
        $qr_string = $user->name." | ".$user->country." | ".$user->email."|".$user->camp."|".$user->nationality."|".$user->phone;
        $qrcode = QrCode::size(400)->generate($qr_string);
        return view('admin.users.qrcode',compact('qrcode'));
    }
    public function returnmedicalview()
    {
        $data = Refugees::pluck('name','id');
        $data2 = Refugees::pluck('camp','id');
        return view('humanitarian.work.medicalhome', [
            'data'=>$data,
            'data2'=>$data2,
        ]);
    }
    public function returnrecourcesview()
    {
        $data = Refugees::pluck('name','id');
        $data2 = Refugees::pluck('camp','id');
        return view('humanitarian.work.resourceshome', [
            'data'=>$data,
            'data2'=>$data2,
        ]);
    }
    public function resourcesdistributed(Request $request)
    {
        $distribution = new Distribution();

        $distribution->name = $request->name;
        $distribution->type = $request->type;
        $distribution->quantity = $request->quantity;
        $distribution->ddate = $request->ddate;
        $distribution->camp = $request->camp;

        $distribution->save();
        return redirect()->back()->with('message','Distribution Recorded Successfully');

    }
    public function returnrequestreportsview()
    {
        return view('humanitarian.work.requestreports');
    }
    public function returnrequestresourceview()
    {
        return view('humanitarian.work.requestresources');
    }
    public function requestreports (Request $request)
    {
        $data = new ReportsRequest;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->duedate = $request->duedate;
        $data->rcategory = $request->rcategory;

        $data->save();
        return redirect()->back();
    }
    public function requestresources(Request $request) 
    {
        $data = new ResourcesRequest;
        $data->name = $request->name;
        $data->camp = $request->camp;
        $data->duedate = $request->duedate;
        $data->resourcecategory = $request->resourcecategory;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();
        return redirect()->back();
    }
    public function uploadmedical(Request $request)
    {
        $data = new Medical;
        $data->name = $request->name;
        $data->camp = $request->camp;
        $data->dateassessed = $request->dateassessed;
        $data->illness = $request->illness;
        $data->medicine = $request->medicine;
        $data->appointment = $request->appointment;

        $data->save();
        return redirect()->back();
    }
    
    
}

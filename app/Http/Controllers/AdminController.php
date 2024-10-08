<?php

namespace App\Http\Controllers;

use App\Models\Refugees;
use App\Models\Relocation;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use DB;
//use PDF;
use Barryvdh\DomPDF\Facade\PDF;
use App;
use App\Models\Distribution;
use App\Models\Medical;
use App\Models\ReportsRequest;
use App\Models\ResourcesRequest;
use App\Charts\RefugeesChart;

class AdminController extends Controller
{
    //
    public function returnadminhome(){

        $noofusers = User::count('id');
        $noofrefugeess = Refugees::count('id');
        $noofrrefugeess = Relocation::count('id');
        $noofdistributions = Distribution::count('id');
        $noofreportsrequests = ReportsRequest::count('id');
        $noofresourcesrequests = ResourcesRequest::count('id');
        $noofillnesses = Medical::count('id');

        return view('admin.main.home', compact(
            'noofusers','noofrefugeess','noofrrefugeess','noofdistributions', 'noofreportsrequests','noofresourcesrequests','noofillnesses'));
    }
    
    public function returnreportsview(){
        return view('admin.reports.reports');
    }
    public function returnrefugeesview(){
        //$refugee = Refugees::select("*")->where("camp", "=", "bor")->get();
        $refugee = Refugees::all();
        return view('admin.refugees.refugees', compact('refugee'));
    }
    /*public function print_pdf(Request $request)
    {
        $refugee = Refugees::all();
        view()->share('refugee',$refugee);
        if($request->has('download')){
            $pdf = PDF::loadView('admin.refugees');
            return $pdf->download('admin.refugees');
        }
        return view('admin.refugees');
    }*/
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
    public function returnusersview()
    {
        $user = User::all();
        return view('admin.users.body', compact('user'));
    }
    public function returnbentiurefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Bentiu")->get();
        return view('admin.reports.bentiu.rbentiu', compact('refugee'));
    }
    public function print_bentiu()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Bentiu")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.bentiu.bentiupdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Bentiu refugees.pdf');

    }
    public function returnmalakalrefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Malakal")->get();
        return view('admin.reports.malakal.rmalakal', compact('refugee'));
    }
    public function print_malakal()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Malakal")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.malakal.malakalpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Malakal refugees.pdf');
    }
    public function returnborrefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Bor")->get();
        return view('admin.reports.bor.rbor', compact('refugee'));
    }
    public function print_bor()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Bor")->get();
        $data = [
            'refugee' =>$refugee,
        ];
        $pdf = PDF::loadView('admin.reports.bor.borpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Bor refugees.pdf');
    }
    public function returnnimulerefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Nimule")->get();
        return view ('admin.reports.nimule.rnimule', compact('refugee'));
    }
    public function print_nimule()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Nimule")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.nimule.nimulepdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Nimule refugees.pdf');
    }
    public function returnkakumarefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Kakuma")->get();
        return view('admin.reports.kakuma.rkakuma', compact('refugee'));
    }
    public function print_kakuma()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Kakuma")->get();
        $data = [
            'refugee' =>$refugee,
        ];
        $pdf = PDF::loadView('admin.reports.kakuma.kakumapdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Kakuma refugees.pdf');
    }
    public function returndadaabrefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Dadaab")->get();
        return view('admin.reports.dadaab.rdadaab', compact('refugee'));
    }
    public function print_dadaab()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "bor")->get();
        $data = [
            'refugee' =>$refugee,
        ];
        $pdf = PDF::loadView('admin.reports.dadaab.dadaabpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Dadaab refugees.pdf');
    }
    public function returnkalobeyeirefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Kalobeyei")->get();
        return view('admin.reports.kalobeyei.rkalobeyei', compact('refugee'));
    }
    public function print_kalobeyei()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "Kalobeyei")->get();
        $data = [
            'refugee' =>$refugee,
        ];
        $pdf = PDF::loadView('admin.reports.kalobeyei.kalobeyeipdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Kalobeyei refugees.pdf');
    }
    public function echart( Request $request)
    {
        $bentiu = Refugees::where('camp', 'bentiu')->get();
        $malakal = Refugees::where('camp', 'malakal')->get();
        $bor = Refugees::where('camp', 'bor')->get();
        $nimule = Refugees::where('camp', 'nimule')->get();
        $bentiu_count = count($bentiu);
        $malakal_count = count($malakal);
        $bor_count = count($bor);
        $nimule_count = count($nimule);

        return view('admin.main.chart', compact('bentiu_count', 'malakal_count', 'bor_count', 'nimule_count'));
    }
    public function returnadminrequests()
    {
        return view('admin.requests.requests');
    }
    public function returnreportsrequestsview()
    {
        $report = ReportsRequest::all();
        return view('admin.requests.reports.rreports', compact('report'));
    }
    public function returnresourcesrequestsview()
    {
        $resource = ResourcesRequest::all();
        return view('admin.requests.resources.rresources', compact('resource'));
    }
    public function returnrelocationsview()
    {
        $relocation = Relocation::all();
        return view('admin.relocations.body', compact('relocation'));
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.editusers.home', compact('user'));
    }
    public function updateuser(Request $request)
    {
        $user = User::find($request->id);
        $user->staff_id = $request->staff_id;
        $user->name = $request->name;
        $user->nationality = $request->nationality;
        $user->email = $request->email;
        $user->camp = $request->camp;
        $user->phone = $request->phone;
        $user->usertype = $request->usertype;
        

        $user->save();
        return redirect()->route('usersadmin')->with('message','Refugee Edited Successfully');
    }
}

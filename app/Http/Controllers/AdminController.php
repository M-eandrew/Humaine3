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

class AdminController extends Controller
{
    //
    public function returnadminhome(){

        $noofusers = User::count('id');
        $noofrefugeess = Refugees::count('id');
        $noofrrefugeess = Relocation::count('id');
        $noofdistributions = Distribution::count('id');

        return view('admin.main.home', compact('noofusers','noofrefugeess','noofrrefugeess','noofdistributions'));
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
        $refugee = Refugees::select("*")->where("camp", "=", "bentiu")->get();
        return view('admin.reports.bentiu.rbentiu', compact('refugee'));
    }
    public function print_bentiu()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "bentiu")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.bentiu.bentiupdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('bentiu refugees.pdf');

    }
    public function returnmalakalrefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "malakal")->get();
        return view('admin.reports.malakal.rmalakal', compact('refugee'));
    }
    public function print_malakal()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "malakal")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.malakal.malakalpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('malakal refugees.pdf');
    }
    public function returnborrefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "bor")->get();
        return view('admin.reports.bor.rbor', compact('refugee'));
    }
    public function print_bor()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "bor")->get();
        $data = [
            'refugee' =>$refugee,
        ];
        $pdf = PDF::loadView('admin.reports.bor.borpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('bor refugees.pdf');
    }
    public function returnnimulerefugees()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "nimule")->get();
        return view ('admin.reports.nimule.rnimule', compact('refugee'));
    }
    public function print_nimule()
    {
        $refugee = Refugees::select("*")->where("camp", "=", "nimule")->get();
        $data = [
            'refugee' => $refugee,
        ];
        $pdf = PDF::loadView('admin.reports.nimule.nimulepdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('nimule refugees.pdf');
    }
}

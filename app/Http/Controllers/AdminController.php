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

class AdminController extends Controller
{
    //
    public function returnadminhome(){

        $noofusers = User::count('id');
        $noofrefugeess = Refugees::count('id');
        $noofrrefugeess = Relocation::count('id');

        return view('admin.main.home', compact('noofusers','noofrefugeess','noofrrefugeess'));
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
}

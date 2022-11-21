<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelocateController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

// Route::get('/donate', [HomeController::class,'donate']);

Route::get('/donate', [HomeController::class,'donate'])->name('donate');
Route::get('/profile', [HomeController::class,'profile'])->name('profile');

Route::get('/home', [HomeController::class,'redirect']);
Route::get('/bodyhome', [HomeController::class,'worker_redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//refugees
Route::get('/return_worker_home', [UserController::class,'returnworkerhome']);
Route::get('/add_refugee_view', [UserController::class,'addrefugeeview']);
Route::post('/upload_refugee', [UserController::class,'uploadrefugee']);
Route::get('/relocate_refugee_view', [RelocateController::class,'relocatedrefugee']);
Route::post('/upload_relocated', [RelocateController::class,'uploadrelocated']);
Route::get('/return_medical_view',[UserController::class,'returnmedicalview']);
Route::get('/return_resources_view',[UserController::class,'returnrecourcesview']);
Route::get('/return_requestreports_view',[UserController::class,'returnrequestreportsview']);
Route::get('/return_resourcerequest_view', [UserController::class,'returnrequestresourceview']);
Route::post('/resources_distributions', [UserController::class, 'resourcesdistributed']);
Route::post('/request_resources', [UserController::class, 'requestresources']);
Route::post('/request_reports', [UserController::class, 'requestreports']);
Route::post('/upload_medical', [UserController::class,'uploadmedical']);

//admin
Route::get('/return_admin_home', [AdminController::class,'returnadminhome']);
Route::get('/return_reports_view', [AdminController::class,'returnreportsview']);
Route::get('/return_refugees_view', [AdminController::class,'returnrefugeesview']);
Route::get('/return_users_view', [AdminController::class, 'returnusersview']);
Route::get('/return_bentiu_refugees',[AdminController::class,'returnbentiurefugees']);
Route::get('/return_malakal_refugees',[AdminController::class,'returnmalakalrefugees']);
Route::get('/return_bor_refugees', [AdminController::class, 'returnborrefugees']);
Route::get('/return_nimule_refugees', [AdminController::class, 'returnnimulerefugees']);
Route::get('echarts', [AdminController::class,'echart']);
Route::get('/return_requests_view', [AdminController::class, 'returnadminrequests']);
Route::get('/return_reportsrequests_view', [AdminController::class, 'returnreportsrequestsview']);
Route::get('/return_resourcesrequests_view',[AdminController::class, 'returnresourcesrequestsview']);

//donor
Route::get('/return_adonations_view', [DonorController::class, 'returnadonationsview']);
Route::get('/stripe', [DonorController::class, 'stripe']);
Route::post('stripe', [DonorController::class, 'stripePost'])->name('stripe.post');
Route::get('/return_drefugees_view', [DonorController::class, 'returndrefugeesview']);
Route::get('export_pdf', [DonorController::class, 'print_refugees']);


//qrcode
Route::get('qrcode/{id}', [UserController::class, 'generate'])->name('generate');
Route::get('qrcodeuser/{iduser}', [UserController::class, 'generateuser'])->name('generateuser');

//pdf
//Route::get('generate-html-to-pdf', [AdminController::class, 'index'])->name('generate-html-to-pdf');
//Route::get('/print_pdf',array('as'=>'print_pdf','uses'=>'AdminController@print_pdf'));
Route::get('export-pdf',[AdminController::class,'print_refugees']);
Route::get('export_bentiurefugees', [AdminController::class, 'print_bentiu']);
Route::get('export_malakalrefugees', [AdminController::class,'print_malakal']);
Route::get('export_borrefugees', [AdminController::class, 'print_bor']);
Route::get('export_nimulerefugees', [AdminController::class, 'print_nimule']);
Route::get('/export_resourcespdf',[AdminController::class,'print_resorces']);

//Route::get('/bodyhome', [CountController::class,'statistics']);


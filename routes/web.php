<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelocateController;



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

//admin
Route::get('/return_admin_home', [AdminController::class,'returnadminhome']);
Route::get('/return_reports_view', [AdminController::class,'returnreportsview']);
Route::get('/return_refugees_view', [AdminController::class,'returnrefugeesview']);
Route::get('/return_users_view', [AdminController::class, 'returnusersview']);

//qrcode
Route::get('qrcode/{id}', [UserController::class, 'generate'])->name('generate');
Route::get('qrcodeuser/{iduser}', [UserController::class, 'generateuser'])->name('generateuser');

//pdf
//Route::get('generate-html-to-pdf', [AdminController::class, 'index'])->name('generate-html-to-pdf');
Route::get('/print_pdf',array('as'=>'print_pdf','uses'=>'AdminController@print_pdf'));
Route::get('export-pdf',[AdminController::class,'print_refugees']);

//Route::get('/bodyhome', [CountController::class,'statistics']);


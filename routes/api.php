<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('v1/access/token', [MpesaController::class,'generateAccessToken']);
Route::post('v1/hlab/stk/push', [MpesaController::class,'customerMpesaSTKPush']);
Route::post('v1/hlab/validation', [MpesaController::class,'mpesaValidation']);
Route::post('v1/hlab/transaction/confirmation', [MpesaController::class,'mpesaConfirmation']);
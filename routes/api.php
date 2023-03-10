<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\MobilController;
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

Route::get('/mobil-list',[MobilController::class,'index'])->name('mobil-list-api');
Route::get('/info',[InfoController::class, 'index'])->name('info-api');

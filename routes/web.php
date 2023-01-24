<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/daftar-mobil', [MobilController::class, 'daftar_mobil']);
Route::get('/daftar-mobil-tersedia', [MobilController::class, 'daftar_mobil_tersedia']);
Route::get('/daftar-mobil-dipinjam', [MobilController::class, 'daftar_mobil_dipinjam_']);
Route::get('/tambah-mobil', [MobilController::class, 'tambah_mobil']);
Route::post('/tambah-mobil', [MobilController::class, 'store']);
Route::get('/edit-mobil/{id}', [MobilController::class, 'edit']);
Route::put('/update-mobil/{id}', [MobilController::class, 'update']);
Route::get('/detail-mobil/{id}', [MobilController::class, 'detail']);

Route::get('/info',[InfoController::class, 'info']);
Route::get('/info-edit/{id}',[InfoController::class, 'edit']);
Route::put('/info-edit/{id}',[InfoController::class, 'update']);

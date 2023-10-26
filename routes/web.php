<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CobaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function(){
    Route::resource('home', 'HomeController');
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function(){
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
    Route::resource('pendidikan', 'PendidikanController');
});

Route::get('/session/create', [SessionController::class,'create']);
Route::get('/session/show', [SessionController::class,'show']);
Route::get('/session/delete', [SessionController::class,'delete']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

Route::get('/cobaerror1', [CobaController1::class,'index']);
Route::get('/cobaerror/{nama?}', [CobaController::class,'index']);

Auth::routes();

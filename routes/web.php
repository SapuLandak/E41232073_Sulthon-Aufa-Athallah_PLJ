<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

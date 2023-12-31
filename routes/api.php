<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ApiPendidikanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('api_pendidikan', 'ApiPendidikanController@getAll');
    Route::get('api_pendidikan/{id}', 'ApiPendidikanController@getPen');
    Route::post('api_pendidikan', 'ApiPendidikanController@createPen');
    Route::put('api_pendidikan/{id}', 'ApiPendidikanController@updatePen');
    Route::delete('api_pendidikan/{id}', 'ApiPendidikanController@deletePen');
});

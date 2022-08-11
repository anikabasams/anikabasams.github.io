<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('task');
});

Route::get('/daftar-mitra', function () {
    return view('member');
});

Route::get('/daftar-kegiatan', function () {
    return view('activity');
});

Route::resource('daftar-wilayah', LocationController::class);

//Route::get('/daftar-wilayah/baru', 'App\Http\Controllers\LocationController@create');

//Route::post('/daftar-wilayah', 'App\Http\Controllers\LocationController@store');


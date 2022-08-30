<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;

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

Route::resource('daftar-wilayah', LocationController::class);

Route::resource('daftar-mitra', MemberController::class);

Route::resource('daftar-kegiatan', ActivityController::class);

Route::resource('daftar-anggota', TaskController::class);

//Route::get('/daftar-wilayah/baru', 'App\Http\Controllers\LocationController@create');

//Route::post('/daftar-wilayah', 'App\Http\Controllers\LocationController@store');


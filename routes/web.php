<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ImportExcelController;

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
    return view('auth/login');
});

/*Route::get('/login', function () {
    return view('auth/login');
});*/

Route::get('/beranda', function () {
    return view('task');
});

Route::resource('daftar-wilayah', LocationController::class);

Route::resource('daftar-mitra', MemberController::class);

Route::resource('daftar-kegiatan', ActivityController::class);

Route::resource('daftar-tugas', TaskController::class);

Auth::routes();

Route::post('/import_excel', [App\Http\Controllers\ImportExcelController::class, 'import_excel'])->name('import_excel');

/*Route::get('admin', function () {
    return view('task'); 
})->middleware('checkRole:administrator');

Route::get('editor', function () { 
    return view('activity'); 
})->middleware(['checkRole:editor,administrator']);*/

//Route::get('/daftar-wilayah/baru', 'App\Http\Controllers\LocationController@create');

//Route::post('/daftar-wilayah', 'App\Http\Controllers\LocationController@store');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

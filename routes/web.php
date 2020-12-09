<?php

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
    return view('master');
});

Route::get('/aset-ict', function () {
    return view('layout.lay-aset-ICT');  
});

Route::get('/aset-sewaan', function () {
    return view('layout.lay-aset-sewaan');
});

Route::get('/aset-pinjaman', function () {
    return view('layout.lay-aset-pinjaman');
});

Route::get('/aset-insurans', function () {
    return view('layout.lay-aset-insurans');
});




// Menu-Pendaftaran
Route::group(['prefix' => 'Menu-Pendaftaran'], function(){
    Route::get('kewpa3a5', function () { return view('pages.Menu-Pendaftaran.kewpa3a5'); });
    Route::get('kewpa4a6', function () { return view('pages.Menu-Pendaftaran.kewpa4a6'); });
    Route::get('kewpa7', function () { return view('pages.Menu-Pendaftaran.kewpa7'); });
    Route::get('kewpa8', function () { return view('pages.Menu-Pendaftaran.kewpa8'); });
    Route::get('kewpa9', function () { return view('pages.Menu-Pendaftaran.kewpa9'); });
    Route::get('kewpa18', function () { return view('pages.Menu-Pendaftaran.kewpa18'); });
});


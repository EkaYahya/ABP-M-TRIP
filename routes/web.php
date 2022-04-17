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

Route::get('/login', function() {
    return view('login');
});

Route::post('/postlogin', 'App\Http\Controllers\logincontroller@postlogin')->name('postlogin');

Route::get('/register', 'App\Http\Controllers\registercontroller@index');
Route::get('/index', 'App\Http\Controllers\indexcontroller@index');
Route::get('/pesan', 'App\Http\Controllers\pesancontroller@index');
Route::get('/paket', 'App\Http\Controllers\paketcontroller@index');
Route::get('/aboutus', 'App\Http\Controllers\aboutuscontroller@index');
Route::get('/dashboard', 'App\Http\Controllers\dashboardcontroller@index');
Route::get('/destinasi', 'App\Http\Controllers\destinasicontroller@index');

Route::get('index', function () {
    return view('index');
});

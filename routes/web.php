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
    return view('index');
});

// Route made by Fakhri
// If you want to know what is it for, ask Fakhri :)
Route::get('/civitas', 'BackendController@createCivitas');
Route::get('/siswa/{id}', 'BackendController@seeSiswa');
// -----------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/reports', function () {
    return view('reports');
});
Route::get('/guidely', function () {
    return view('guidely');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/shortcodes', function () {
    return view('shortcodes');
});

Route::get('/icons', function () {
    return view('icons');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/error', function () {
    return view('error');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

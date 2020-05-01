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
    return view('Beranda');
});

// BERANDA
Route::get('/home', function () {
    return view('Beranda');
});
// Route::get('/home', 'HomeController@index')->name('home');

// -----------------------------------------------------
// PEGAWAI (GURU & TENDIK)
// STATUS PEKERJAAN GURU
Route::get('/status-pekerjaan-guru', function () {
    return view('pegawai/StatusPekerjaanGuru');
});
// KBM
Route::get('/KBM', function () {
    return view('pegawai/KBM');
});
// BIODATA PEGAWAI
Route::get('/bio-pegawai', function () {
    return view('pegawai/BiodataPegawai');
});



// -----------------------------------------------------
// SISWA
// TABEL SISWA
Route::get('/data-siswa', function () {
    return view('siswa/DataSiswa');
});
// TabelSiswaPerKelas
Route::get('/detail-kelas', function () {
    return view('siswa/DetailKelas');
});
// BIODATA SISWA
Route::get('/bio-siswa', function () {
    return view('siswa/BiodataSiswa');
});



// -----------------------------------------------------
// AUTH
// /login ---> default
//custome
Route::get('/verification', function () {
    return view('auth/verify');
});
Route::get('/email-reset', function () {
    return view('auth/passwords/email');
});
Route::get('/reset', function () {
    return view('auth/passwords/reset');
});
Route::get('/confirm-reset', function () {
    return view('auth/passwords/confirm');
});

// Route made by Fakhri
// If you want to know what is it for, ask Fakhri :)
Route::get('/civitas', 'BackendController@createCivitas');
Route::get('/siswa/{id}', 'BackendController@seeSiswa');
Route::get('/pesan', 'BackendController@seeAllMessage');
Route::get('/pesan/receiver', 'BackendController@getMessageReceiver');
// -----------------

Auth::routes();




// TESTING, COBA TEMPLATE
Route::get('/template', function () {
    return view('CobaTemplate/CobaTemplate');
});
// TABEL SISWA TAB MODE
Route::get('/tabelsiswa', function () {
    return view('TabelSiswa-TabMode');
});

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

// BERANDA
Route::get('/', function () {
    return view('beranda');
});

// -----------------------------------------------------
// STATUS PEKERJAAN GURU
Route::get('/status-pekerjaan-guru', function () {
    return view('pekerjaan/status_pekerjaan_guru');
})->name('job.status');
// KBM
Route::get('/kbm', function () {
    return view('pekerjaan/kbm');
})->name('kbm');
// Mata Pelajaran
Route::get('/mata-pelajaran', function () {
    return view('pekerjaan/mata_pelajaran');
})->name('subject');

// -----------------------------------------------------
// PEGAWAI (GURU & TENDIK)
// BIODATA PEGAWAI
Route::get('/bio-pegawai', function () {
    return view('pegawai/biodata_pegawai');
});



// -----------------------------------------------------
// SISWA
// TABEL SISWA
Route::get('/data-siswa', function () {
    return view('siswa/data_siswa');
});
// TabelSiswaPerKelas
Route::get('/detail-kelas', function () {
    return view('siswa/detail_kelas');
});
// BIODATA SISWA
Route::get('/bio-siswa', function () {
    return view('siswa/biodata_siswa');
});

// -----------------------------------------------------
// INVENTARIS
Route::get('/data-inventaris', 'InventoryController@seeInventory')->name('inventory');

Route::get('/kebutuhan-barang', function () {
    return view('inventaris/kebutuhan');
})->name('inventory.needs');

Route::get('/gedung', function () {
    return view('inventaris/gedung');
})->name('inventory.building');

Route::get('/ruang', function () {
    return view('inventaris/ruang');
})->name('inventory.room');



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

// -----------------------------------------------------
// TESTING

//COBA TEMPLATE
Route::get('/template', function () {
    return view('CobaTemplate/coba_template');
});
// TABEL SISWA TAB MODE
Route::get('/tabelsiswa', function () {
    return view('CobaTemplate/tabel_siswa_tabmode');
});

// Semua route dibawah ini baru bisa diakses setelah login
// jadi bikin routenya di atas aja, jangan dibawah

Auth::routes();

Route::get('/home', function () {
    return view('beranda');
})->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');

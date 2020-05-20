<?php

use App\Gedung;
use App\MataPelajaran;
use App\TahunAjaran;
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

Auth::routes([
    'register' => false, // matiin register
    'verify' => false // matiin verifikasi email
]);

Route::middleware(['auth'])->group(function () {

    // BERANDA
    Route::get('/', 'HomeController@index')->name('dashboard');

    // STATUS PEKERJAAN GURU
    Route::get('/status-pekerjaan', function () {
        return view('pekerjaan/status_pekerjaan_guru', [
            'schoolYears' => TahunAjaran::all(),
            'subjects' => MataPelajaran::all()
        ]);
    })->name('job.status');

    // KBM
    Route::prefix('KBM')->group(function () {
        Route::get('/', 'KBMController@showAllKBM')->name('kbm');
        Route::post('/delete', 'KBMController@delete')->name('kbm.delete');
        Route::post('/create', 'KBMController@create')->name('kbm.create');
        Route::post('/update', 'KBMController@update')->name('kbm.update');
        // 2. route buat nyari kbm

        // Tambah Nilai
        Route::get('/create-nilai', function () {
            return view('pekerjaan/create_nilai');
        });
    });

    // MATA PELAJARAN
    Route::prefix('mata-pelajaran')->group(function () {
        Route::get('/', 'MataPelajaranController@showAllMapel')->name('subject');
        Route::post('/delete', 'MataPelajaranController@delete')->name('subject.delete');
        Route::post('/create', 'MataPelajaranController@create')->name('subject.create');
        Route::post('/update', 'MataPelajaranController@update')->name('subject.update');
    });

    // PEGAWAI (GURU & TENDIK)
    Route::prefix('pegawai')->group(function () {
        Route::prefix('guru')->group(function () {
            // Data Guru
            Route::get('/', 'GuruController@showAll')->name('teacher');
            // BIODATA Guru
            Route::get('/{id}/biodata', 'GuruController@biodataGuru')->name('teacher.detail');
            // CREATE Guru
            Route::post('/create', 'GuruController@store')->name('teacher.create');
        });

        Route::prefix('tendik')->group(function () {
            // Data Tendik
            Route::get('/', 'TendikController@showAll')->name('tendik');
            // BIODATA Tendik
            Route::get('/{id}/biodata', 'TendikController@biodataTendik')->name('tendik.detail');
            // CREATE Tendik
            Route::post('/create', 'TendikController@store')->name('tendik.create');
        });
    });

    // SISWA
    Route::prefix('siswa')->group(function () {
        Route::get('/data', 'SiswaController@seeAll')->name('student');
        Route::get('/create', 'SiswaController@showCreatePage')->name('student.create');
        Route::post('/data/cari', 'SiswaController@searchStudent')->name('student.search');
        Route::post('/create', 'SiswaController@store')->name('student.create.submit');

        // BIODATA SISWA
        Route::get('/{id}', 'SiswaController@studentBiodata')->name('student.detail');
    });

    // KELAS
    Route::prefix('kelas')->group(function () {
        Route::get('/', 'KelasController@seeAll')->name('class');
        Route::get('/{id}', 'KelasController@show')->name('class.detail');
    });

    // INVENTARIS
    Route::prefix('inventaris')->group(function () {
        // GEDUNG
        Route::prefix('gedung')->group(function () {
            Route::get('/', 'GedungController@showAllGedung')->name('inventory.building');
            Route::post('/create', 'GedungController@create')->name('building.create');
            Route::put('/update', 'GedungController@update')->name('building.update');
            Route::delete('/delete', 'GedungController@destroy')->name('building.delete');
        });

        // RUANGAN
        Route::prefix('ruang')->group(function () {
            Route::get('/', 'RuanganController@showAllRuangan')->name('inventory.room');
            Route::post('/create', 'RuanganController@create')->name('room.create');
            Route::post('/search', 'RuanganController@search')->name('room.search');
            Route::put('/update', 'RuanganController@update')->name('room.update');
            Route::delete('/delete', 'RuanganController@destroy')->name('room.delete');
        });

        // KEBUTUHAN BARANG
        Route::prefix('kebutuhan-barang')->group(function () {
            Route::get('/', 'KebutuhanBarangController@index')->name('inventory.needs');
            Route::post('/search', 'KebutuhanBarangController@search')->name('inventory.needs.search');
            Route::post('/create', 'KebutuhanBarangController@store')->name('inventory.needs.store');
            Route::delete('/delete', 'KebutuhanBarangController@destroy')->name('inventory.needs.delete');
            Route::put('/update', 'KebutuhanBarangController@update')->name('inventory.needs.update');
        });

        // DATA INVENTARIS
        Route::get('/daftar/{needId}', 'InventoryController@seeInventory')->name('inventory');
        Route::get('/update/{id}', 'InventoryController@showUpdatePage')->name('inventory.update');
        // Route::post('/cari', 'InventoryController@search')->name('inventory.search');
        Route::post('/store', 'InventoryController@store')->name('inventory.store');
        Route::put('/update', 'InventoryController@update')->name('inventory.update.submit');
        Route::delete('/delete', 'InventoryController@delete')->name('inventory.delete');

        // JENIS INVENTARIS
        Route::prefix('jenis-inventaris')->group(function () {
            Route::get('/', 'JenisInventarisController@index')->name('inventory.type');
            Route::post('/search', 'JenisInventarisController@search')->name('inventory.type.search');
            Route::post('/create', 'JenisInventarisController@store')->name('inventory.type.store');
            Route::delete('/delete', 'JenisInventarisController@destroy')->name('inventory.type.delete');
            Route::put('/update', 'JenisInventarisController@update')->name('inventory.type.update');
        });
    });

    // PESAN
    Route::prefix('message')->group(function () {
        Route::get('/sentbox', 'PesanController@sentbox')->name('message.outbox');
        Route::get('/{id}', 'PesanController@detail')->name('message.detail');
        Route::post('/create', 'PesanController@createMessage')->name('message.create');
        Route::get('/delete/{id}', 'PesanController@deleteMessage')->name('message.delete');
    });
});

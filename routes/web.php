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

// Semua route jadinya harus login dulu

Auth::routes([
    'register' => false, // matiin register
    'verify' => false // matiin verifikasi email
]);

Route::middleware(['auth'])->group(function () {

    // BERANDA
    Route::get('/', function () {
        return view('beranda');
    })->name('dashboard');

    // STATUS PEKERJAAN GURU
    Route::get('/status-pekerjaan', function () {
        return view('pekerjaan/status_pekerjaan_guru', [
            'schoolYears' => TahunAjaran::all(),
            'subjects' => MataPelajaran::all()
        ]);
    })->name('job.status');

    // KBM
    Route::prefix('kbm')->group(function () {
        Route::get('/', 'KBMController@showAllKBM')->name('kbm');
        Route::post('/delete', 'KBMController@delete')->name('kbm.delete');
        Route::post('/create', 'KBMController@create')->name('kbm.create');
        Route::post('/update', 'KBMController@update')->name('kbm.update');
        // 2. route buat nyari kbm
    });

    // MATA PELAJARAN
    Route::get('/mata-pelajaran', function () {
        return view('pekerjaan/mata_pelajaran');
    })->name('subject');

    // PEGAWAI (GURU & TENDIK)
    Route::prefix('pegawai')->group(function () {
        // Data Guru
        Route::get('/guru', 'GuruController@showAll')->name('teacher');

        // BIODATA Guru
        Route::get('/guru/{id}', 'GuruController@biodataGuru')->name('teacher.detail');

        // Data Tendik
        Route::get('/tendik', 'TendikController@showAll')->name('tendik');

        // BIODATA Tendik
        Route::get('/tendik/{id}', 'TendikController@biodataTendik')->name('tendik.detail');
    });



    // SISWA
    Route::prefix('siswa')->group(function () {

        Route::get('/data', 'SiswaController@seeAll')->name('student');
        Route::post('/data/cari', 'SiswaController@searchStudent')->name('student.search');

        // BIODATA SISWA
        Route::get('/{id}', 'SiswaController@studentBiodata')->name('student.detail');
    });

    // KELAS
    Route::prefix('kelas')->group(function () {
        Route::get('/', 'KelasController@seeAll')->name('class');
        Route::get('/{id}', 'KelasController@show')->name('class.detail');
    });


    // -----------------------------------------------------
    // INVENTARIS
    Route::prefix('inventaris')->group(function () {
        Route::get('/list', 'InventoryController@seeInventory')->name('inventory');

        // inventaris/kebutuhan-barang
        Route::get('/kebutuhan-barang', function () {
            return view('inventaris/kebutuhan', ['buildings' => Gedung::all()]);
        })->name('inventory.needs');

        Route::get('/gedung', function () {
            return view('inventaris/gedung');
        })->name('inventory.building');

        Route::get('/ruang', function () {
            return view('inventaris/ruang');
        })->name('inventory.room');
    });

    // PESAN
    Route::prefix('message')->group(function () {
        Route::get('/sentbox', 'PesanController@sentbox')->name('message.outbox');
        Route::get('/{id}', 'PesanController@detail')->name('message.detail');
        Route::post('/create', 'PesanController@createMessage')->name('message.create');
        Route::get('/delete/{id}', 'PesanController@deleteMessage')->name('message.delete');
    });



    // -----------------------------------------------------
    // AUTH
    // /login ---> default
    //custome
    // Route::get('/verification', function () {
    //     return view('auth/verify');
    // });
    // Route::get('/email-reset', function () {
    //     return view('auth/passwords/email');
    // });
    // Route::get('/reset', function () {
    //     return view('auth/passwords/reset');
    // });
    // Route::get('/confirm-reset', function () {
    //     return view('auth/passwords/confirm');
    // });


    // Route made by Fakhri
    // If you want to know what is it for, ask Fakhri :)
    // Route::get('/civitas', 'BackendController@createCivitas');
    // Route::get('/siswa/{id}', 'BackendController@seeSiswa');
    // Route::get('/pesan', 'BackendController@seeAllMessage');
    // Route::get('/pesan/receiver', 'BackendController@getMessageReceiver');
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
});

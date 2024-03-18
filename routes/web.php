<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\JadwalKegiatanDiklatController;
use App\Http\Controllers\MSWordController;
use App\Http\Controllers\LengkapiDataDiklat;
use App\Http\Controllers\PanitiaPengajarController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\SuratPemanggilanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('main-menu');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::get('/home', function () {
    return redirect('main-menu');
})->name('home');

Route::controller(Controller::class)->group(function () {
    Route::get('/main-menu', 'mainmenu')->name('mainmenu');
    Route::get('/pelatihan/{id}', 'pelatihan')->name('pelatihan');
    Route::get('/suratpemanggilanmenu/{id}', 'suratpemanggilanmenu')->name('suratpemanggilanmenu');
    Route::get('/pengguna', 'pengguna')->name('pengguna');
});

Route::controller(DiklatController::class)->group(function () {
    Route::prefix('diklat')->group(function () {
        Route::get('/', 'index')->name('diklat');
        Route::post('/store', 'store')->name('diklat.store');
        Route::get('/edit/{id}', 'edit')->name('diklat.edit');
        Route::post('/update/{id}', 'update')->name('diklat.update');
    });
});

Route::controller(MSWordController::class)->group(function () {
    Route::prefix('msword')->group(function () {
        Route::get('/{id}', 'generateDocx')->name('msword');
    });
});

Route::controller(SuratPemanggilanController::class)->group(function () {
    Route::prefix('suratpemanggilan')->group(function () {
        Route::get('/{id}', 'index')->name('suratpemanggilan');
        Route::post('/store', 'store')->name('suratpemanggilan.store');
        Route::get('/edit/{id}', 'edit')->name('suratpemanggilan.edit');
        Route::post('/update/{id}', 'update')->name('suratpemanggilan.update');
        Route::get('/delete/{id}', 'delete')->name('suratpemanggilan.delete');
    });
});

Route::controller(PanitiaPengajarController::class)->group(function () {
    Route::prefix('panitiapengajar')->group(function () {
        Route::get('/{id}', 'index')->name('panitiapengajar');
        Route::post('/store', 'store')->name('panitiapengajar.store');
        Route::get('/edit/{id}', 'edit')->name('panitiapengajar.edit');
        Route::post('/update/{id}', 'update')->name('panitiapengajar.update');
        Route::get('/delete/{id}', 'delete')->name('panitiapengajar.delete');
    });
});

Route::controller(LengkapiDataDiklat::class)->group(function () {
    Route::prefix('lengkapidata')->group(function () {
        Route::get('/{id}', 'index')->name('lengkapidata');
        Route::post('/store/{id}', 'store')->name('lengkapidata.store');
    });
});

// Route::controller(PesertaPelatihanController::class)->group(function () {
//     Route::prefix('peserta')->group(function () {
//         Route::get('/{id}', 'index')->name('peserta');
//         Route::post('/import', 'import')->name('users.import');
//         Route::post('/store', 'store')->name('peserta.store');
//         Route::get('/edit/{id}', 'edit')->name('peserta.edit');
//         Route::post('/update/{id}', 'update')->name('peserta.update');
//         Route::get('/delete/{id}', 'delete')->name('peserta.delete');
//     });
// });

Route::controller(JadwalKegiatanDiklatController::class)->group(function () {
    Route::prefix('jadwal')->group(function () {
        Route::get('/{id}', 'index')->name('jadwal');
        Route::post('/store', 'store')->name('jadwal.store');
        Route::get('/edit/{id}', 'edit')->name('jadwal.edit');
        Route::post('/update/{id}', 'update')->name('jadwal.update');
        Route::get('/delete/{id}', 'delete')->name('jadwal.delete');
    });
});

<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\MSWordController;
use App\Http\Controllers\SuratPemanggilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect('mainmenu');
});

Auth::routes();

Route::get('/home', function(){
    return redirect('mainmenu');
})->name('home');

Route::controller(Controller::class)->group(function () {
    Route::get('/main-menu', 'mainmenu')->name('mainmenu');
    Route::get('/pelatihan/{id}', 'pelatihan')->name('pelatihan');
    Route::get('/suratpemanggilanmenu/{id}', 'suratpemanggilanmenu')->name('suratpemanggilanmenu');
});

Route::controller(DiklatController::class)->group(function (){
    Route::prefix('diklat')->group(function () {
        Route::get('/', 'index')->name('diklat');
        Route::post('/store', 'store')->name('diklat.store');
        // Route::get('/edit/{id}', 'DiklatController@edit')->name('diklat');
        // Route::post('/update/{id}', 'DiklatController@update')->name('diklat');
        Route::get('/delete/{id}', 'delete')->name('diklat.delete');
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
        // Route::get('/edit/{id}', 'SuratPemanggilanController@edit')->name('suratpemanggilan.edit');
        // Route::post('/update/{id}', 'SuratPemanggilanController@update')->name('suratpemanggilan.update');
        Route::get('/delete/{id}', 'delete')->name('suratpemanggilan.delete');
    });
});

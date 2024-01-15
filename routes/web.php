<?php

use App\Http\Controllers\Controller;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(Controller::class)->group(function () {
    Route::get('/mainmenu', 'mainmenu')->name('mainmenu');
    Route::get('/pelatihan', 'pelatihan')->name('pelatihan');
    Route::get('/suratpemanggilanmenu', 'suratpemanggilanmenu')->name('suratpemanggilanmenu');
});

Route::controller(SuratPemanggilanController::class)->group(function () {
    Route::prefix('suratpemanggilan')->group(function () {
        Route::get('/', 'index')->name('suratpemanggilan');
        Route::post('/store', 'store')->name('suratpemanggilan.store');
        // Route::get('/edit/{id}', 'SuratPemanggilanController@edit')->name('suratpemanggilan.edit');
        // Route::post('/update/{id}', 'SuratPemanggilanController@update')->name('suratpemanggilan.update');
        Route::get('/delete/{id}', 'SuratPemanggilanController@delete')->name('suratpemanggilan.delete');
    });
});

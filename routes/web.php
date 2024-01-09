<?php

use App\Http\Controllers\Controller;
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
    Route::get('/suratpemanggilan', 'suratpemanggilan')->name('suratpemanggilan');
});

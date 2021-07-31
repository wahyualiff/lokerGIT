<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilPelamarController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplyController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'home'])->name('beranda');

// Resource
Route::resource('pelamar', PelamarController::class);
Route::resource('pelamar_profil', ProfilPelamarController::class)->middleware("role:pelamar|perusahaan");
Route::resource('apply', ApplyController::class)->middleware('role:pelamar');
Route::resource('lowongan', LowonganController::class);
Route::resource('user', UserController::class);

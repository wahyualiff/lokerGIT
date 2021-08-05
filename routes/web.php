<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilPelamarController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\LihatController;
use App\Models\Lowongan;

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
    $datalowongan = Lowongan::all();
    return view('welcome', ['lowongan' => $datalowongan]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'home'])->name('beranda');

// Resource
Route::resource('pelamar', PelamarController::class);
Route::resource('pelamar_profil', ProfilPelamarController::class)->middleware("role:admin|perusahaan");
Route::resource('apply', ApplyController::class)->middleware('role:pelamar');
Route::resource('lowongan', LowonganController::class)->middleware("role:admin|perusahaan");
Route::resource('user', UserController::class)->middleware("role:admin|perusahaan");
Route::resource('lihat', LihatController::class);

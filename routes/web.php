<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Peserta_orController;

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
    return view('Page.homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detail', function () {
    return view('OpRec.DetailPeserta');
});

Route::get('/test', function () {
    return view('Template.test');
});

// HOMEPAGE,LOGIN,DAFTAR
Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');

// PESERTA OR
Route::get('/lihat-peserta', [Peserta_orController::class, 'index'])->name('lihat-peserta');
Route::post('/save-peserta', [Peserta_orController::class, 'store'])->name('save-peserta');
Route::get('/detail-peserta/{id}', [Peserta_orController::class, 'show'])->name('detail-peserta');
Route::post('/nilai-peserta/{id}', [Peserta_orController::class, 'update'])->name('nilai-peserta');

// AKUN ANGGOTA
Route::get('/list-akun', [AkunController::class, 'index'])->name('list-akun');
Route::get('/list-akun/{id}/detail1', [AkunController::class, 'show1'])->name('detail-akun1');
Route::get('/list-akun/{id}/detail2', [AkunController::class, 'show2'])->name('detail-akun2');
Route::get('/create-akun', [AkunController::class, 'create'])->name('create-akun');

// DIVISI
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/create-divisi', [DivisiController::class, 'create'])->name('create-divisi');
Route::post('/save-divisi', [DivisiController::class, 'store'])->name('save-divisi');
Route::get('/delete-divisi/{id}', [DivisiController::class, 'destroy'])->name('delete-divisi');
Route::get('/edit-divisi/{id}', [DivisiController::class, 'edit'])->name('edit-divisi');
Route::post('/update-divisi/{id}', [DivisiController::class, 'update'])->name('update-divisi');

// RAPAT
Route::get('/rapat', [RapatController::class, 'index'])->name('rapat');
Route::get('/create-rapat', [RapatController::class, 'create'])->name('create-rapat');
Route::post('/save-rapat', [RapatController::class, 'store'])->name('save-rapat');
Route::get('/detail-rapat/{id}', [RapatController::class, 'show'])->name('detail-rapat');
Route::get('/delete-rapat/{id}', [RapatController::class, 'destroy'])->name('delete-rapat');
Route::get('/edit-rapat/{id}', [RapatController::class, 'edit'])->name('edit-rapat');
Route::post('/update-rapat/{id}', [RapatController::class, 'update'])->name('update-rapat');

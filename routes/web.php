<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Peserta_orController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['auth:user,anggota']], function(){
    // PAGE DASHBOARD  
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // HOMEPAGE,LOGIN,DAFTAR
    Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
    Route::get('/home', [LoginController::class, 'home'])->name('home');

    // PESERTA OR
    Route::get('/lihat-peserta', [Peserta_orController::class, 'index'])->name('lihat-peserta');
    Route::post('/save-peserta', [Peserta_orController::class, 'store'])->name('save-peserta');
    Route::get('/detail-peserta/{id}', [Peserta_orController::class, 'show'])->name('detail-peserta');
    Route::post('/nilai-peserta/{id}', [Peserta_orController::class, 'update'])->name('nilai-peserta');
    Route::get('/tolak-peserta/{id}', [Peserta_orController::class, 'tolak'])->name('tolak-peserta');
    Route::get('/laporan-peserta', [Peserta_orController::class, 'laporan'])->name('laporan-peserta');

    // AKUN ANGGOTA
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
    Route::post('/tambah-anggota', [AnggotaController::class, 'store'])->name('tambah-anggota'); //Dari peserta OR
    Route::get('/create-anggota', [AnggotaController::class, 'create'])->name('create-anggota'); //Buat anggota lewat form
    Route::post('/save-anggota', [AnggotaController::class, 'save'])->name('save-anggota');
    Route::get('/detail-anggota/{id}', [AnggotaController::class, 'show'])->name('detail-anggota');
    Route::get('/edit-anggota/{id}', [AnggotaController::class, 'edit'])->name('edit-anggota');
    Route::post('/update-anggota/{id}', [AnggotaController::class, 'update'])->name('update-anggota');
    Route::get('/delete-anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete-anggota');

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

    //PENGURUS
    Route::get('/pengurus', [AbsensiController::class, 'index'])->name('pengurus');
    Route::get('/absensi/{id}', [AbsensiController::class, 'show'])->name('absensi/{id}');
    Route::get('/detail/{id}', [AbsensiController::class, 'detail'])->name('detail-rapat');

    // KEUANGAN 
    Route::get('/kas-masuk', [App\Http\Controllers\KeuanganController::class, 'index'])->name('kas-masuk');
    Route::get('/create-kas-masuk', [App\Http\Controllers\KeuanganController::class, 'create'])->name('create-kas-masuk');
    Route::post('/create-kas-masuk', [App\Http\Controllers\KeuanganController::class, 'store']);
    Route::get('/ubah-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'edit']);
    Route::post('/update-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'update']);
    Route::get('/delete-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'destroy']);
    Route::get('/kas-keluar', [App\Http\Controllers\KeuanganController::class, 'index1'])->name('kas-keluar');
    Route::get('/create-kas-keluar', [App\Http\Controllers\KeuanganController::class, 'create1'])->name('create-kas-keluar');
    Route::post('/create-kas-keluar', [App\Http\Controllers\KeuanganController::class, 'store1']);
    Route::get('/laporan-kas', [App\Http\Controllers\KeuanganController::class, 'show'])->name('laporan-kas');
});
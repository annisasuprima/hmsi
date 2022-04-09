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
use RealRashid\SweetAlert\Facades\Alert;

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

// HOMEPAGE,LOGIN,DAFTAR
Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
Route::post('/save-peserta', [Peserta_orController::class, 'store'])->name('save-peserta');
Route::get('/home', [LoginController::class, 'home'])->name('home');

Route::group(['middleware'=>['auth:user,anggota']], function(){
    
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    // PESERTA OR
    Route::get('/lihat-peserta', [Peserta_orController::class, 'index'])->name('lihat-peserta');
    Route::get('/detail-peserta/{id}', [Peserta_orController::class, 'show'])->name('detail-peserta');
    Route::post('/nilai-peserta/{id}', [Peserta_orController::class, 'update'])->name('nilai-peserta');
    Route::get('/tolak-peserta/{id}', [Peserta_orController::class, 'tolak'])->name('tolak-peserta');
    Route::get('/laporan-peserta', [Peserta_orController::class, 'laporan'])->name('laporan-peserta');

    // AKUN ANGGOTA
    Route::get('/profil', [AnggotaController::class, 'profil'])->name('profil');
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

    //PENGURUS ABSENSI 
    Route::get('/pengurus', [AbsensiController::class, 'index'])->name('pengurus');
    Route::get('/presensi', [AbsensiController::class, 'listabsen'])->name('presensi');
    Route::get('/absensi/{id}', [AbsensiController::class, 'show'])->name('absen');
    Route::get('/absensi', [AbsensiController::class, 'formabsen'])->name('absensi');
    Route::get('/detail/{id}', [AbsensiController::class, 'detail'])->name('detail-rapat');
    Route::post('/save-absen', [AbsensiController::class, 'store'])->name('save-absen');
    Route::post('/simpan-absen', [AbsensiController::class, 'simpanabsen'])->name('simpanabsen');

    // KEUANGAN (ADMIN)
    Route::get('/kas-masuk', [App\Http\Controllers\KeuanganController::class, 'index'])->name('kas-masuk');
    Route::get('/create-kas-masuk', [App\Http\Controllers\KeuanganController::class, 'create'])->name('create-kas-masuk');
    Route::post('/save-kas-masuk', [App\Http\Controllers\KeuanganController::class, 'store'])->name('save-kas-masuk');
    Route::get('/ubah-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'edit'])->name('ubah-kas-masuk');
    Route::put('/update-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'update'])->name('update-kas-masuk');;
    Route::get('/delete-kas-masuk/{id}', [App\Http\Controllers\KeuanganController::class, 'destroy'])->name('delete-kas-masuk');
    Route::get('/kas-keluar', [App\Http\Controllers\KeuanganController::class, 'index1'])->name('kas-keluar');
    Route::get('/create-kas-keluar', [App\Http\Controllers\KeuanganController::class, 'create1'])->name('create-kas-keluar');
    Route::post('/save-kas-keluar', [App\Http\Controllers\KeuanganController::class, 'store1'])->name('save-kas-keluar');
    Route::get('/ubah-kas-keluar/{id}', [App\Http\Controllers\KeuanganController::class, 'edit1'])->name('ubah-kas-keluar');
    Route::put('/update-kas-keluar/{id}', [App\Http\Controllers\KeuanganController::class, 'update1'])->name('update-kas-keluar');
    Route::get('/delete-kas-keluar/{id}', [App\Http\Controllers\KeuanganController::class, 'destroy1'])->name('delete-kas-keluar');
    Route::get('/laporan-kas', [App\Http\Controllers\KeuanganController::class, 'show'])->name('laporan-kas');
    Route::get('/kat-keuangan', [App\Http\Controllers\KeuanganController::class, 'kategori'])->name('kat-keuangan');

    //Kategori Keuangan (Admin)
    Route::get('/kat-keuangan', [App\Http\Controllers\KeuanganController::class, 'indexkat'])->name('kat-keuangan');
    Route::get('/create-kat-keuangan', [App\Http\Controllers\KeuanganController::class, 'createkat'])->name('create-kat-keuangan');
    Route::post('/save-kat-keuangan', [App\Http\Controllers\KeuanganController::class, 'storekat'])->name('save-kat-keuangan');
    Route::get('/ubah-kat-keuangan/{id}', [App\Http\Controllers\KeuanganController::class, 'editkat'])->name('ubah-kat-keuangan');
    Route::put('/update-kat-keuangan/{id}', [App\Http\Controllers\KeuanganController::class, 'updatekat'])->name('update-kat-keuangan');
    Route::get('/delete-kat-keuangan/{id}', [App\Http\Controllers\KeuanganController::class, 'destroykat'])->name('delete-kat-keuangan');

    //KEUANGAN (ANGGOTA)
    Route::get('/riwayat-kas', [App\Http\Controllers\KeuanganController::class, 'show_riwayat'])->name('riwayat-kas');
    Route::get('/form-lihat', [App\Http\Controllers\KeuanganController::class, 'create2'])->name('form-lihat');
    Route::post('/form-bayar', [App\Http\Controllers\KeuanganController::class, 'store2'])->name('form-bayar');;
});
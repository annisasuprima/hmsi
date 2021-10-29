<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\RapatController;

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
    return view('dashboard');
});

Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/create-divisi', [DivisiController::class, 'create'])->name('create-divisi');
Route::post('/save-divisi', [DivisiController::class, 'store'])->name('save-divisi');

Route::get('/rapat', [RapatController::class, 'index'])->name('rapat');
Route::get('/create-rapat', [RapatController::class, 'create'])->name('create-rapat');
Route::post('/save-rapat', [RapatController::class, 'store'])->name('save-rapat');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //tambahan ini untuk memanggil HomeController
use App\Http\Controllers\AuthController; //tambahan ini untuk memanggil AuthController

//Rute Get untuk halaman utama
Route::get('/', [HomeController::class, 'index']); //tambahan ini untuk memanggil method index pada HomeController
//Rute Post untuk pengajuan baru
Route::post('/Pengajuan Baru', [HomeController::class, 'store']);//tambahan ini untuk memanggil method store pada HomeController
// Rute untuk halaman admin
Route::get('/admin', [HomeController::class, 'admin']);
// Rute untuk menghapus pengajuan
Route::delete('/pengajuan/{id}', [HomeController::class, 'destroy']);
// Rute untuk memperbarui status pengajuan
Route::patch('/pengajuan/{id}/setujui', [HomeController::class, 'setujui']);
//Rute Get untuk halaman login
Route::get('/login', [AuthController::class, 'index'])->name('login'); //tambahan ini untuk memanggil method index pada AuthController
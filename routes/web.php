<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //tambahan ini untuk memanggil HomeController

//Rute Get untuk halaman utama
Route::get('/', [HomeController::class, 'index']); //tambahan ini untuk memanggil method index pada HomeController
//Rute Post untuk pengajuan baru
Route::post('/Pengajuan Baru', [HomeController::class, 'store']);//tambahan ini untuk memanggil method store pada HomeController
// Rute untuk halaman admin
Route::get('/admin', [HomeController::class, 'admin']);
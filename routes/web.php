<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //tambahan ini untuk memanggil HomeController

Route::get('/', [HomeController::class, 'index']); //tambahan ini untuk memanggil method index pada HomeController

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController; // 1. Impor controller Anda

// 2. Arahkan rute root (/) ke metode 'index' di ProfilController
Route::get('/', [ProfilController::class, 'index']);
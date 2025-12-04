<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ObatController;

Route::resource('pasien', PasienController::class);

Route::resource('dokter', DokterController::class);

Route::resource('pendaftaran', RawatJalanController::class);

Route::resource('rekam-medis', RekamMedisController::class);

Route::resource('obat', ObatController::class);


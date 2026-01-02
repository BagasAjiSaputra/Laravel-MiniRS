<?php

use App\Http\Controllers\LaboratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RawatJalanController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PengajuanController;

use App\Http\Controllers\UserController;

Route::resource('pasien', PasienController::class);
Route::resource('dokter', DokterController::class);
Route::resource('pendaftaran', RawatJalanController::class);
Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('obat', ObatController::class);
Route::resource('laborator', LaboratorController::class);
Route::get('/jadwal', [JadwalController::class, 'index']);



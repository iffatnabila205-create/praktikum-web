<?php

use App\Http\Controllers\LaporBanjirController;
use Illuminate\Support\Facades\Route;

Route::get('/lapor-banjir', [LaporBanjirController::class, 'index'])->name('laporbanjir.form');
Route::post('/lapor-banjir', [LaporBanjirController::class, 'store'])->name('laporbanjir.store');
Route::get('/daftar-laporan', [LaporBanjirController::class, 'daftar'])->name('laporbanjir.daftar');

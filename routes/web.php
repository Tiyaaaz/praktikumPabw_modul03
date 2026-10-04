<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::redirect('/', '/laporan/create');

Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
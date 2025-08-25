<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LelangController;

// Route default langsung ke halaman pemenang
Route::get('/', [LelangController::class, 'index'])->name('pemenang.index');

// Export PDF
Route::get('/export-pemenang', [LelangController::class, 'exportPemenang'])->name('export.pemenang');

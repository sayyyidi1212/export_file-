<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LelangController;

// Route default langsung ke halaman pemenang
Route::get('/', [LelangController::class, 'index'])->name('pemenang.index');

// Export PDF
Route::get('/export-pemenang', [LelangController::class, 'exportPemenang'])->name('export.pemenang');

// Tambahan route untuk 6 tombol dummy
Route::get('/export-pemenang1', [LelangController::class, 'exportPemenang1'])->name('export.pemenang1');
Route::get('/export-pemenang2', [LelangController::class, 'exportPemenang2'])->name('export.pemenang2');
Route::get('/export-pemenang3', [LelangController::class, 'exportPemenang3'])->name('export.pemenang3');
Route::get('/export-pemenang4', [LelangController::class, 'exportPemenang4'])->name('export.pemenang4');
Route::get('/export-pemenang5', [LelangController::class, 'exportPemenang5'])->name('export.pemenang5');
Route::get('/export-pemenang6', [LelangController::class, 'exportPemenang6'])->name('export.pemenang6');

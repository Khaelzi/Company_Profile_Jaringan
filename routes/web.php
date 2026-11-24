<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananController;
Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');

// Nanti kalau halaman lain sudah jadi, aktifkan:
Route::get('/tentang-kami', [TentangKamiController::class, 'tentangkami'])->name('tentang-kami');
Route::get('/layanan', [LayananController::class, 'layanan'])->name('layanan');
// Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');

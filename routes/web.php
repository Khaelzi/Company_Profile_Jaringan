<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProyekController;

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [TentangKamiController::class, 'tentangkami'])->name('tentang-kami');
Route::get('/layanan', [LayananController::class, 'layanan'])->name('layanan');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/proyek', [ProyekController::class, 'proyek'])->name('proyek');
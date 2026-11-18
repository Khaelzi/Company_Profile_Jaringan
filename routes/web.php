<?php

use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('layanan');
//});

Route::get('/', [LayananController::class, 'index']);
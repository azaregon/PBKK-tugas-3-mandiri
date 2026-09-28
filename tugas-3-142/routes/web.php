<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Rute Aplikasi Profil Akademik (Tugas 4 - PBKK)
|--------------------------------------------------------------------------
| Ketiga rute diarahkan ke satu PageController sesuai spesifikasi tugas.
*/

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-mahasiswa', [PageController::class, 'profil'])->name('profil');
Route::get('/ide-agent', [PageController::class, 'ideAgent'])->name('ide-agent');

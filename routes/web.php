<?php

use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news1', function () {
    return view('news1');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/input-groups', function () {
    return view('input-groups');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route crud
Route::get('/pegawai', [PegawaiDBController::class, 'index']);


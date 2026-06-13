<?php

use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BolpenDBController;
use App\Http\Controllers\KeranjangBelanjaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiswaController;

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
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/cari', [SiswaController::class, 'cari'])->name('siswa.cari');

// route crud bolpen
Route::get('/bolpen', [BolpenDBController::class, 'index']);
Route::get('/bolpen/tambah', [BolpenDBController::class, 'tambah']);
Route::post('/bolpen/store', [BolpenDBController::class, 'store']);
Route::get('/bolpen/edit/{id}', [BolpenDBController::class, 'edit']);
Route::post('/bolpen/update', [BolpenDBController::class, 'update']);
Route::get('/bolpen/hapus/{id}', [BolpenDBController::class, 'hapus']);
Route::get('/bolpen/cari', [BolpenDBController::class, 'cari']);

// route crud keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post ('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
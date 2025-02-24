<?php

use App\Http\Controllers\auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




Route::get('/',[HomeController::class,'tampil'])->name('home');

Route::get('dusun/limau',[DusunController::class,'limau'])->name('dusun.limau');
Route::get('dusun/sidorejo',[DusunController::class,'sidorejo'])->name('dusun.sidorejo');
Route::get('dusun/senala',[DusunController::class,'senala'])->name('dusun.senala');


Route::get('berita',[BeritaController::class,'berita'])->name('berita.berita');
Route::get('berita/isi/{id}',[BeritaController::class,'isiBerita'])->name('berita.isiBerita');
Route::get('berita/tampil',[BeritaController::class,'tampil'])->name('berita.tampil');
Route::get('berita/tambah',[BeritaController::class,'tambah'])->name('berita.tambah');
Route::post('berita/simpan',[BeritaController::class,'simpan'])->name('berita.simpan');
Route::get('berita/edit/{id}',[BeritaController::class,'edit'])->name('berita.edit');
// Route::put('berita/update/{id}',[BeritaController::class,'update'])->name('berita.update');
Route::put('berita/update/{berita}', [BeritaController::class, 'update'])->name('berita.update');

Route::post('berita/hapus/{id}',[BeritaController::class,'hapus'])->name('berita.hapus');

Route::get('login',[auth::class,'formlogin'])->name('auth.formlogin');


Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');



// Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
// Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
// Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');


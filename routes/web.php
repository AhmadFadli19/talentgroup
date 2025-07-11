<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerCardController;
use App\Http\Controllers\KolaborasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SlideBloggerController;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/about", [HomeController::class, 'about'])->name('about');
Route::get("/blog", [HomeController::class, 'blog'])->name('blog');
Route::get("/partnerkolaborasi", [HomeController::class, 'partnerkolaborasi'])->name('partnerkolaborasi');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin-home');
Route::post('/admin/register-proses/', [AdminController::class, 'registar_proses'])->name('admin-register');
Route::get('/admin/kelolaakun', [AdminController::class, 'kelolaakun'])->name('admin-kelolaakun');
Route::get('/admin/content/content', [AdminController::class, 'content'])->name('admin-content');
Route::get('/admin/home/search', [AdminController::class, 'search'])->name('adminSearch');
Route::get('/admin/comtent', [AdminController::class, 'content'])->name('admin-content');
Route::post('/slidebanner/store', [AdminController::class, 'store'])->name('slidebanner.store');

Route::get('/kolaborasi/create', [KolaborasiController::class, 'create'])->name('kolaborasi.create');
Route::post('/kolaborasi', [KolaborasiController::class, 'store'])->name('kolaborasi.store');

Route::get('/kolaborasi/{id}/detail-form', [KolaborasiController::class, 'detailForm'])->name('kolaborasi.detail.form');
Route::post('/kolaborasi/{id}/detail-form', [KolaborasiController::class, 'submitDetail'])->name('kolaborasi.detail.submit');
// Route dinamis berdasarkan nama view
Route::get('/kolaborasi/{slug}', [KolaborasiController::class, 'dynamicView'])->name('kolaborasi.dynamic')->where('slug', '[A-Za-z0-9\-_]+');




Route::get('/bannercard/create', [BannerCardController::class, 'create'])->name('bannercard.create');
Route::post('/bannercard', [BannerCardController::class, 'store'])->name('bannercard.store');
Route::get('/bannercard/{id}/detail-form', [BannerCardController::class, 'detailForm'])->name('bannercard.detail.form');
Route::post('/bannercard/{id}/detail-form', [BannerCardController::class, 'submitDetail'])->name('bannercard.detail.submit');

// Route dinamis berdasarkan nama view
Route::get('/bannercard/{slug}', [BannerCardController::class, 'dynamicView'])->name('bannercard.dynamic')->where('slug', '[A-Za-z0-9\-_]+');

Route::get('/cards/create', [CardController::class, 'create'])->name('cards.create');
Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

Route::get('/cards/{id}/detail-form', [CardController::class, 'detailForm'])->name('cards.detail.form');
Route::post('/cards/{id}/detail-form', [CardController::class, 'submitDetail'])->name('cards.detail.submit');

// Route dinamis berdasarkan nama view
Route::get('/cards/{slug}', [CardController::class, 'dynamicView'])->name('cards.dynamic')->where('slug', '[A-Za-z0-9\-_]+');


Route::post('/login/update/{id}', [AdminController::class, 'update'])->name('login-update');
Route::post('/login/akun-delete/{id}', [AdminController::class, 'akun_delete'])->name('akun-delete');


Route::get('/slideblogger/create', [SlideBloggerController::class, 'create'])->name('slideblogger.create');
Route::post('/slideblogger', [SlideBloggerController::class, 'store'])->name('slideblogger.store');

Route::get('/slideblogger/{id}/detail-form', [SlideBloggerController::class, 'detailForm'])->name('slideblogger.detail.form');
Route::post('/slideblogger/{id}/detail-form', [SlideBloggerController::class, 'submitDetail'])->name('slideblogger.detail.submit');

// Route dinamis berdasarkan nama view
Route::get('/slideblogger/{slug}', [SlideBloggerController::class, 'dynamicView'])->name('slideblogger.dynamic')->where('slug', '[A-Za-z0-9\-_]+');

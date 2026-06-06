<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProfileController;

// Rute umum non-autentikasi
Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('user.beranda');
});
Route::get('/tentang', function () {
    return view('user.tentang');
});

// Frontend Detail Berita
Route::get('/berita/{slug}', [ArticleController::class, 'show'])->name('berita.show');

// Autentikasi bawaan Laravel UI
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute Group untuk Admin (Hanya boleh diakses oleh user yang sudah Login)
Route::middleware(['auth'])->group(function () {

    // Halaman Utama Dashboard
    Route::get('/admin/dashboard', function () {
        $userCount = \App\Models\User::count();
        $categoryCount = \App\Models\Category::count();
        $articleCount = \App\Models\Article::count();
        $tagCount = \App\Models\Tag::count();
        
        return view('admin.dashboard', compact('userCount', 'categoryCount', 'articleCount', 'tagCount'));
    })->name('admin.dashboard');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');   

    // CRUD Pengguna, Kategori & Berita
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/articles', ArticleController::class);
    Route::resource('/admin/tags', TagController::class);

});

Auth::routes();

// Shortcut untuk logout (POST preferred by Laravel UI)
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
});


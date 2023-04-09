<?php

use App\Models\Category;

// User
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProdukController as UserProdukController;
use App\Http\Controllers\UserPemakaianController as UserPemakaianController;
use App\Http\Controllers\DatadiriUserController as UserDatadiriUserController;

// Admin
use App\Http\Controllers\SofdeletedController;
use App\Http\Controllers\PostController as UserHomeController;
use App\Http\Controllers\UserController as adminUserController;
use App\Http\Controllers\adminCategoryController as adminCategoryController;
use App\Http\Controllers\CategoryProdukController as adminCategoryProdukController;
use App\Http\Controllers\DashboardPostController as adminDashboardPostController;
use App\Http\Controllers\PemakaianController as adminPemakaianController;
use App\Http\Controllers\ProducController as adminProducController;
use App\Http\Controllers\ProdukSofdeletedController as adminProdukSofdeletedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route data kirim ke halaman utama ke user
// route blog
Route::get('/', [UserHomeController::class, 'index']);
Route::get('post-detail/{id}/show', [UserHomeController::class, 'show'])->name('post.show');
Route::get('/blog-posts', [UserHomeController::class, 'blogpost'])->name('blog');
// route produk
Route::get('/produks', [UserProdukController::class, 'index']);
Route::get('produks-detail/{id}/show', [UserProdukController::class, 'show'])->name('produks.show');
// route cara pemakaian
Route::get('/cara-pemakaian', [UserPemakaianController::class, 'index']);
// contact
Route::get('/contact', function () {
    return view('home.contact');
});


// perbaikan dari Nas untuk user & admin
// dashboard
Route::get('/dashboard', function () {
    $menuDashbord = 'active';
    return view('dashboard', compact('menuDashbord'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('data-user', UserDatadiriUserController::class);
});


// perbaikan dari Nas untuk admin
// dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', adminUserController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('produk', adminProducController::class);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('categoryproduk', adminCategoryProdukController::class);
});
Route::get('/produkDelete', [adminProdukSofdeletedController::class, 'postsdel'])->middleware('auth', 'admin');
Route::get('/produk/{id}/restore', [adminProdukSofdeletedController::class, 'restore'])->middleware('auth', 'admin');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('posts', adminDashboardPostController::class);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('category', adminCategoryController::class);
});
Route::get('/dataDelete', [SofdeletedController::class, 'postsdel'])->middleware('auth', 'admin');
Route::get('/data/{id}/restore', [SofdeletedController::class, 'restore'])->middleware('auth', 'admin');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('pemakaian', adminPemakaianController::class);
});
Route::get('/pakaiDelete', [adminPemakaianController::class, 'postsdel'])->middleware('auth', 'admin');
Route::get('/pakai/{id}/restore', [adminPemakaianController::class, 'restore'])->middleware('auth', 'admin');

// not found
Route::fallback(function () {
    return response()->view('home.notfound');
});
require __DIR__ . '/auth.php';
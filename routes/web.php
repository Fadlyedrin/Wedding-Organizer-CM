<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\back\GalleryController;
use App\Http\Controllers\back\PackageController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\DashboardController;

Route::get('/', function () {
    return view('front.index');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/categories', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
    ]);
    Route::resource('/packages', PackageController::class);

    Route::resource('/galleries', GalleryController::class);
    Route::resource('/users', UserController::class);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/indexuser', [DashboardController::class, 'index']);
});


require __DIR__.'/auth.php';
// require __DIR__.'/admin-auth.php';

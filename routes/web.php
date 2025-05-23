<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FrontendController::class, 'index']);
Route::get("/about", [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/category/{slug}', [FrontendController::class,'showCategory'])->name('category');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('single-blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

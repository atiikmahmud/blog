<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',         [HomeController::class, 'index'])->name('home');
Route::get('/blog',     [HomeController::class, 'blog'])->name('blog');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login',    [HomeController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

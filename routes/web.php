<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',         [HomeController::class, 'index'])->name('home');
Route::get('/blog',     [HomeController::class, 'blog'])->name('blog');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login',    [HomeController::class, 'login'])->name('login');

Route::fallback(function () 
{   
    $title = 'Page not found';
    return view('nopage', compact('title')); 
});

Route::post('/contacts',[ContactController::class, 'store'])->name('contact.post');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/profile',   [UserController::class, 'profile'])->name('user.profile');

});

Route::group(['middleware' => ['auth', 'role']], function() {
    Route::get('/admin',            [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/dashboard',  [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile',    [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/test',       [AdminController::class, 'test'])->name('admin.test');
});
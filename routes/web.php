<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',                         [HomeController::class, 'index'])->name('home');
Route::get('/blog',                     [HomeController::class, 'blog'])->name('blog');
Route::get('/single-post/{id}',         [HomeController::class, 'show'])->name('single.post');
Route::get('/about-us',                 [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contacts',                 [HomeController::class, 'contacts'])->name('contacts');
Route::get('/register',                 [HomeController::class, 'register'])->name('register');
Route::get('/login',                    [HomeController::class, 'login'])->name('login');

Route::fallback(function () 
{   
    $title = 'Page not found';
    return view('nopage', compact('title')); 
});

Route::post('/contacts',                [ContactController::class, 'store'])->name('contact.post');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard',            [UserController::class, 'index'])->name('dashboard');
    Route::get('/profile',              [UserController::class, 'profile'])->name('user.profile');
    
    Route::get('/add-post',             [PostController::class, 'addPost'])->name('add.post');
    Route::post('/add-post',            [PostController::class, 'store'])->name('store.post');
    Route::get('/post-list',            [PostController::class, 'userPost'])->name('list.post');
    Route::get('/posts/{id}',           [PostController::class, 'show'])->name('show.post');
    Route::get('/edit-post/{id}',       [PostController::class, 'edit'])->name('edit.post');
    Route::post('/edit-post',           [PostController::class, 'update'])->name('update.post');
    Route::delete('/post-delete/{id}',  [PostController::class, 'destroy'])->name('post.destroy');

    Route::post('/comments',            [CommentController::class, 'store'])->name('comment.store');
    Route::post('/reply-comments',      [CommentController::class, 'replyStore'])->name('reply.store');

});

Route::group(['middleware' => ['auth', 'role']], function() {
    Route::get('/admin',                [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/dashboard',      [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile',        [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/posts',          [AdminController::class, 'posts'])->name('admin.posts');
    Route::get('/admin/add-post',       [AdminController::class, 'addPost'])->name('admin.add.post');
    Route::get('/admin/comments',       [AdminController::class, 'comments'])->name('admin.comments');
    Route::get('/admin/users',          [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/add-user',       [AdminController::class, 'addUser'])->name('admin.add.user');
    Route::get('/admin/admin-users',    [AdminController::class, 'adminUsers'])->name('admin.admin.users');
    Route::get('/admin/add-admin-user', [AdminController::class, 'addAdminUser'])->name('add.admin.user');

});
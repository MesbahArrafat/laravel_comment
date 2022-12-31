<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [PostController::class, 'index'])->name('index');
Route::get('/posts_index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts_create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts_show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/post_store', [PostController::class, 'store'])->name('posts.store');



Route::post('/posts_commentsDisplay', [PostController::class, 'store'])->name('posts.commentsDisplay');
Route::post('/comments.store', [CommentController::class, 'store'])->name('comments.store');

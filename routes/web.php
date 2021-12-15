<?php

use App\Http\Controllers\api\CategoryApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::middleware(['auth'])->group(function(){

    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('categories', [CategoryController::class, 'store'])->name('save-category');
    Route::get('categories/{id}', [CategoryController::class, 'show']);

    Route::get('tags', [TagsController::class, 'index'])->name('tags');;
    Route::post('tags', [TagsController::class, 'store'])->name('save-tag');
    Route::get('tags/{id}', [TagsController::class, 'show']);

    Route::get('comments', [CommentController::class, 'index'])->name('comments');;
    Route::get('comments/{id}', [CommentController::class, 'show']);

    Route::get('users', [UserController::class, 'index'])->name('users');

    Route::get('posts', [PostController::class, 'index'])->name('posts');
    Route::get('posts/{id}', [PostController::class, 'show'])->name('show-posts');
    Route::get ('new-post', [PostController::class, 'newPost'])->name('add-post');
    Route::post ('new-post', [PostController::class, 'store'])->name('save-post');

});
Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\api\AuthorApiController;
use App\Http\Controllers\api\CategoryApiController;
use App\Http\Controllers\api\PostApiController;
use App\Http\Controllers\api\TagsApicontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('categories', [CategoryApiController::class, 'index']);
Route::get('categories/{id}/posts', [CategoryApiController::class, 'posts']);
Route::get('posts', [PostApiController::class, 'index']);
Route::get('users', [AuthorApiController::class, 'index']);
Route::get('users/{id}/posts', [AuthorApiController::class, 'posts']);
Route::get('tags', [TagsApicontroller::class, 'index']);
Route::get('tags/{id}/posts', [TagsApicontroller::class, 'posts']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

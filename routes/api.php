<?php

use App\Http\Controllers\Api\PostController;
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

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::put('/post/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

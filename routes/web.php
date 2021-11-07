<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'showcase'])->name('welcome');
Route::middleware(['auth:sanctum', 'verified'])->prefix("dashboard")->group(function () {
    Route::get('/', [App\Http\Controllers\ProjectController::class, 'showmine'])->name('dashboard');
    Route::get('/create',[App\Http\Controllers\ProjectController::class, 'create'])->name('createproject');
    Route::post('/comment',[App\Http\Controllers\CommentController::class, 'store'])->name('storecomment');
    Route::get('/show/{id}',[App\Http\Controllers\ProjectController::class, 'show'])->name('showproject');
    Route::post('/store',[App\Http\Controllers\ProjectController::class, 'store'])->name('storeproject');
    Route::post('/like',[App\Http\Controllers\LikeController::class, 'store'])->name('storelike');
});


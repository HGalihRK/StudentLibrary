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
Route::get('/games', [App\Http\Controllers\ProjectController::class, 'games'])->name('games');
Route::get('/profile/{id}', [App\Http\Controllers\ProjectController::class, 'showmineall'])->name('showmine');
Route::get('/random', [App\Http\Controllers\ProjectController::class, 'random'])->name('random');
Route::POST('/search', [App\Http\Controllers\ProjectController::class, 'filtergames'])->name('search');
Route::middleware(['auth:sanctum', 'verified'])->prefix("dashboard")->group(function () {
    Route::get('/', [App\Http\Controllers\ProjectController::class, 'dashboard'])->name('dashboard');
    Route::get('/delete/{id}', [App\Http\Controllers\ProjectController::class, 'delete'])->name('delete');
    Route::get('/deletec/{id}', [App\Http\Controllers\CommentController::class, 'delete'])->name('deletecom');
    Route::get('/create',[App\Http\Controllers\ProjectController::class, 'create'])->name('createproject');
    Route::post('/comment',[App\Http\Controllers\CommentController::class, 'store'])->name('storecomment');
    Route::get('/show/{id}',[App\Http\Controllers\ProjectController::class, 'show'])->name('showproject');
    Route::post('/store',[App\Http\Controllers\ProjectController::class, 'store'])->name('storeproject');
    Route::get('/edit/{id}',[App\Http\Controllers\ProjectController::class, 'edit'])->name('editproject');
    Route::post('/like',[App\Http\Controllers\LikeController::class, 'store'])->name('storelike');
    Route::post('/save',[App\Http\Controllers\ProjectController::class, 'save'])->name('saveproject');
});


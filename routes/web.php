<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('/post/{slug}', action: [PostController::class, 'show'])->name('post.show');

Route::get('menue', [MenuController::class, 'index']);
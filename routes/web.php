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

Route::get('speisekarte', function(){
    return view('speisekarte.show');
});

Route::get('unsere-geschichte', function(){
    return view('unsere-geschichte.show');
});

Route::get('feiern-events', function(){
    return view('feiern-events.show');
});

Route::get('kontakt', function(){
    return view('kontakt.show');
});
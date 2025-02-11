<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('/post/{slug}', action: [PostController::class, 'show'])->name('post.show');

Route::group(['prefix' => '{locale}', 'middleware' => Localization::class], function() {
    Route::get('/', function(){
        return view('home') ;
    })->name('home');

    Route::get('/de', function () {
        return view('home');
    })->name('home.de');

    Route::get('/menu', function(){
        return view('menu.show');
    })->name('menu');

    Route::get('history', function(){
        return view('history.show');
    })->name('history');
    
    Route::get('events', function(){
        return view('events.show');
    })->name('events');
    
    Route::get('contact', function(){
        return view('contact.show');
    })->name('contact');
});

// for home url
Route::get('/home/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    App::setLocale($locale);
    Session::put('locale', $locale);

    return view('home'); // Default your page
})->name('switchLang');

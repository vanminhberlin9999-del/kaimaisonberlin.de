<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Frontend\PressController;
use App\Http\Controllers\Frontend\EventController;

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

//for upload image
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// FOR ADMIN
Route::group(['prefix' => 'admin6688', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin2.dashboard');

    Route::resource('post', AdminPostController::class)->names([
        'index' => 'admin.post.index',
        'create' => 'admin.post.create',
        'store' => 'admin.post.store',
        'show' => 'admin.post.show',
        'edit' => 'admin.post.edit',
        'update' => 'admin.post.update',
        'destroy' => 'admin.post.destroy',
    ]);

    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('admin6688.register.form');
    Route::post('register', [RegisterController::class, 'register']);

    Route::post('upload-image', function (Request $request) {

        // Validate the uploaded file
        $request->validate(['file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5048']);
        
        try{
            // Store the image in the 'public/uploads' directory
            $path = $request->file('file')->store('uploads', 'public');  // 'public' disk
                    
            // Generate the correct URL, replacing 'public' with 'storage'
            $url = asset('storage/' . str_replace('public/', '', $path)); // Correct URL format
           // Return the location in the required format
            // return json_encode();
            return json_encode(array('location' => $url));
        }catch(ErrorException $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }
    });
});

// Login Routes (outside of localized route group)
Route::middleware(['guest'])->group(function(){
    
});

// Logout Route (this should also be outside localized group)
Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [LoginController::class, 'logout']);
});
Route::get('/', [HomeController::class,'index']); // HOME PAGE without locale 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// FOR FRONTEND ---------------------------------------------------------------------------------------------------------------------------

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

    Route::get('about', function(){
        return view('about.show');
    })->name('about');
    
    Route::resource('press', PressController::class)->names([
        'index' => 'press.index',
        'show' => 'press.show'
    ]);

    Route::resource('events', EventController::class)->names([
        'index' => 'events.index',
        'show' => 'events.show'
    ]);

    Route::get('functions', function(){
        return view('functions.show');
    })->name('functions');

    Route::get('giftcards', function(){
        return view('giftcards.show');
    })->name('giftcards');
    
    Route::get('contact', function(){
        return view('contact.show');
    })->name('contact');
});


<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
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
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::resource('post', AdminPostController::class)->names([
        'index' => 'admin.post.index',
        'create' => 'admin.post.create',
        'store' => 'admin.post.store',
        'show' => 'admin.post.show',
        'edit' => 'admin.post.edit',
        'update' => 'admin.post.update',
        'destroy' => 'admin.post.destroy',
    ]);

    Route::post('upload-image', function (Request $request) {

        // Validate the uploaded file
        $request->validate(['file' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048']);
        
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

Route::middleware(['guest'])->group(function(){
    Route::get('/login/{locale?}', [LoginController::class, 'showLoginForm'])->defaults('locale', 'en');
    Route::post('/login/{locale?}', [LoginController::class, 'login'])->name('login')->defaults('locale', 'en')->name('login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [LoginController::class, 'logout']);
});



// FOR FRONTEND -----------------------------------------
Route::get('/', [HomeController::class,'index']);

// for home url
Route::get('/home/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    App::setLocale($locale);
    Session::put('locale', $locale);

    return view('home'); // Default your page
})->name('switchLang');


Route::get('press', [PostController::class, 'press']);
Route::get('events', [PostController::class, 'events']);

Route::resource('presse', PostController::class)->names([
    'show' => 'post.show',
]);

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

    Route::get('press', function(){
        return view('press.show');
    })->name('press');
    
    Route::get('events', function(){
        return view('events.show');
    })->name('events');

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


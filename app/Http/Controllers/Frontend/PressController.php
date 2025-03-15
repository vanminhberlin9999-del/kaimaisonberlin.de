<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PressController extends Controller
{
    public function index(){
        $presses = Post::where('type' , 'press')->get(); 
        
        return view('press.index', compact('presses'));  // Pass the posts to the home view
    }

    public function show($locale, $slug){
    
        $press = Post::where('slug', $slug)->firstOrFail();
       
        return view('press.show', data: compact('press'));
    }
}
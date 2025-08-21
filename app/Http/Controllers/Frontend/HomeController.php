<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(){
        $presses = Post::where('type' , 'press')->latest()->take(3)->get(); 
        $news_or_event = Post::whereIn('type' , ['news', 'event'])->latest()->take(12)->get(); 
        
        return view('home', compact('presses', 'news_or_event'));  // Pass the posts to the home view
    }
}

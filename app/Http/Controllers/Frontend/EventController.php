<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class EventController extends Controller
{
    public function index(){
        $news_or_event = Post::where('type' , ['news', 'event'])->get(); 
        
        return view('events.index', compact( 'news_or_event'));  // Pass the posts to the home view
    }

    public function show($locale, $slug){
        $news_or_event = Post::where('slug', $slug)->firstOrFail();
        $news_or_event->content = str_replace('src="storage/', 'src="' . asset('storage/'). '/', $news_or_event->content);

        return view('events.show', data: compact('news_or_event'));
    }
}

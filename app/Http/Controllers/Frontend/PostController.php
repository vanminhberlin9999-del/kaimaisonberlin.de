<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class PostController extends Controller
{
    public function index(){
        $posts = Post::all('*');
        return view('admin.post.index', ['posts' => $posts]);
    }
    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.show', compact('post'));
    }

    public function show3(){
        $posts = Post::latest()->take(3)->get();
        return view('home', compact('posts'));  // Pass the posts to the home view
    }
}

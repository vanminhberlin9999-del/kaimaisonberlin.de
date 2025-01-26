<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all('*');
    }
    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.show', compact('post'));
    }

    public function create(){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    // Delete a post from the database
    public function destroy($id): string
    {
        return "oki";
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminPostController extends Controller
{
    private $types = ['press', 'news', 'event'];
    public function index()
    {
        $posts = AdminPostModel::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $types = $this->types;
        return view('admin.post.create', compact('types'));
    }

    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'title' => 'required|string|max:555',
                'content' => 'required|string',
                'feature_image' => 'image|mimes:jpeg,png,jpg,gif,webp',
                'post_date' => 'required|date',
                'short_content' => 'required|string|max:255',
                'type' => 'required|string|max:55',
            ]);
            
            // Store Image
            if ($request->hasFile('feature_image') && $request->file('feature_image')->isValid()) {
                $imagePath = $request->file('feature_image')->store('uploads', 'public');  // 'public' disk
                // dd($imagePath); // Kiểm tra đường dẫn lưu file
            } else {
                dd('File upload failed or invalid file');
            }
    
            AdminPostModel::create(
                ['title' => $request->title,
                'content' => $request->content,
                'slug' => Str::slug($request->title), // Generate slug from title
                'author_id' => Auth::id(), // Get the currently logged-in user's ID
                'feature_image' => $imagePath ?? null,
                'post_date' => $request->post_date,
                'short_content' => $request->short_content,
                'type' => $request->input('type')
                ]
            );
            
            return redirect()->route('admin.post.index')->with('success', 'Post created successfully !');
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $post = AdminPostModel::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = AdminPostModel::findOrFail($id);
        $types = $this->types;
        return view('admin.post.edit', compact('post', 'types'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'string|max:555',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'post_date' => 'required|date',
            'short_content' => 'required|string|max:255',
            'type' => 'required|string|max:55',
        ]);
        // dd('Validation passed', $validated);


        $post = AdminPostModel::findOrFail($id);

        // Handle Image Update
      
        if ($request->hasFile('feature_image')) {
            // Delete the old image if it exists
            if ( $post->feature_image ) {
                Storage::disk('public')->delete($post->feature_image);
            }

            // Store new image
            $imagePath = $request->file('feature_image')->store('uploads', 'public');  // 'public' disk
            $validated['feature_image'] = $imagePath;

        }
        $post->slug = Str::slug($request->title);
        $post->update($validated);

        return redirect()->route('admin.post.index');
    }

    public function destroy($id)
    {
        $post = AdminPostModel::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}

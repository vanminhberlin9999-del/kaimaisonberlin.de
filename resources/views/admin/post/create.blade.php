<!-- resources/views/admin/posts/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="w-full">
        <div class="container mx-auto p-8 flex flex-col h-auto">
            <h1 class="text-xl text-center">Create new Post</h1>
            <form action="{{ route('admin.post.store') }}" method="POST" class="w-full p-8" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="btn bg-green-200 p-4 block mt-40">Update Post</button>
                
                <div class="flex flex-col">
                    <label for="title" class="p-4">Title</label>
                    <input type="text" name="title" id="title" required class="p-4 border border-gray-300">
                </div>

                <div class="flex flex-col w-1/2">
                    <label for="feature_image" class="p-4">Feature Image</label>
                    <input type="file" name="feature_image" id="feature_image"  class="p-4 border border-gray-300">
                </div>

                <div class="flex flex-row mt-4">
                    <div class="w-1/2">
                        <label for="post_date" class="p-4">Post Date</label>
                    <input type="date" name="post_date" id="post_date" required class="p-4 border border-gray-300">
                    </div>

                    <div class="w-1/2">
                        <label for="type" class="p-4">Type</label>

                        <select name="type" class="p-4 border border-gray-300">
                            @foreach ($types as $type)
                                <option value="{{ $type }}" {{ old('type', 'press') == $type ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="short_content" class="p-4">Short Content</label>
                    <input type="text" name="short_content" id="short_content" required class="p-4 border border-gray-300">
                </div>

                <div class="flex flex-col">
                    <label for="content" class="p-4">Content</label>
                    <textarea name="content" id="content" class="border p-4 border-gray-300 h-auto overflow-hidden"
                    oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'"
                    ></textarea>
                </div>
                
                <button type="submit" class="btn bg-green-200 p-4 block mt-10">Update Post</button>
                
            </form>
        </div>
    </div>
@endsection

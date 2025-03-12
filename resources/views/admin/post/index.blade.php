@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-xl">List oft posts</h1>
    <h2 class="text-right pr-8">
        <a href="/admin6688" class="text-sm">Back to dashboard</a>
    </h2>
    <div class="w-full bg-white p-8 flex  flex-col h-auto">
        <div class="container mx-auto">
   
    <a href="{{ route('admin.post.create') }}" class="btn btn-primary mt-8 mb-10 bg-green-200 p-4">Create new Post</a>

    <table class="w-full border-collapse border border-gray-300 shadow-md rounded-lg mt-8">
        <thead>
            <tr class="bg-gray-200 text-gray-700 uppercase text-sm">
                <th class="p-3 border border-gray-300">ID</th>
                <th class="p-3 border border-gray-300">Title</th>
                <th class="p-3 border border-gray-300" >Description</th>
                <th class="p-3 border border-gray-300">Type</th>
                <th class="p-3 border border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="p-3 border border-gray-300">
                        {{ $post->id }}
                    </td>
                    <td class="p-3 border border-gray-300">
                        {{ $post->title }}
                    </td>
                    
                    <td class="p-3 border border-gray-300">{{ \Illuminate\Support\Str::words($post->content, 30, '...') }} </td>
                    <td class="p-3 border border-gray-300">{{$post->type}}</td>
                    <td class="p-3 border border-gray-300">
                        <a href="{{ route('admin.post.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Do you really want to remove this post?')">Remove</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
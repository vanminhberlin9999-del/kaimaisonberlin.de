@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('admin.post.edit', $post->id) }}">Chỉnh sửa bài viết</a>
@endsection
<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', $post->title) <!-- Đặt tiêu đề riêng cho trang này -->

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!}</p>
@endsection

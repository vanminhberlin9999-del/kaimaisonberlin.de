<!-- resources/views/event/show.blade.php -->

@extends('layouts.app')

@section('title', 'Event') 

@section('content')
   
    <!-- Press -->
    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 text-right mb-10">News/Events</h2>
    
            <div class="swiper-container flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                <div class="swiper-wrapper flex flex-wrap md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                    @foreach($news_or_event as $post)
    
                    <div class="swiper-slide w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-3">
                        <div class="w-full">
                           <a href="{{ route('events.show', ['locale' => app()->getLocale(), $post->slug ]) }}">
                                <img src="{{ asset('/storage/'.$post->feature_image ) }}" 
                                    data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                                 alt="Reserve 1" class="w-full h-auto">
                           </a>
                            <h3 class="text-green-900 text-xl font-therma text-4xl">
                                <a href="{{ route('events.show', ['locale' => app()->getLocale(), $post->slug ]) }} " class="font-therma">{{ $post->title }}</a>
                            </h3>
                            <div class="text-black text-sm font-12 pt-2"> 
                                {{ $post->short_content }}  <!-- Limit the content to 150 chars -->
                            </div>

                            <div class="text-black text-sm font-12 pt-2">
                                {{ \Carbon\Carbon::parse($post->post_date)->format('l, j F Y') }}
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

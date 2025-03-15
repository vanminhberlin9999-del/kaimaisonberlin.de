 
@extends('layouts.app')

@section('title', 'Event') 

@section('content')

 <!-- Event item page -->
 <div class="w-full bg-white">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 mb-10">{{__('home.press_section.title')}}</h2>

        <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">

            <div class="w-full flex flex-col items-center md:items-start text-center md:text-left p-8">
             
                    <img src="{{ asset('/storage/'.$news_or_event->feature_image) }}" class="post-image" 
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 1" class="w-full h-auto">
                  
                    <h3 class="text-green-900  text-title-post font-therma pt-2">
                        {{ $news_or_event->title }}
                    </h3>

                    <div class="text-black text-sm font-12 pt-2 ">
                        {{ \Carbon\Carbon::parse($news_or_event->post_date)->format('l, j F Y') }}
                    </div>

                    <div class="text-black text-sm font-12 pt-2"> 
                        {!! $news_or_event->content !!}
                    </div>
            </div>
        </div>

    </div>
</div>
<!-- resources/views/press/show.blade.php -->

@extends('layouts.app')

@section('title', 'Press') 

@section('content')
   
     <!-- Press -->
     <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 mb-10">{{__('home.press_section.title')}}</h2>
    
            <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                @foreach($presses as $press)

                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                       <a href="{{ route('press.show', ['locale' => app()->getLocale(), $press->slug ]) }}">
                            <img src="{{ asset('/storage/'.$press->feature_image) }}" 
                                data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                             alt="Reserve 1" class="w-full h-auto">
                       </a>
                        <h3 class="text-green-900 text-xl font-therma text-xl pt-2">
                            <a href="{{ route('press.show', ['locale' => app()->getLocale(), $press->slug ]) }}" class="font-therma">{{ $press->title }}</a>
                        </h3>
                        <div class="text-black text-sm font-12 pt-2"> 
                            {{ $press->short_content }}   <!-- Limit the content to 150 chars -->
                        </div>
                        
                        <div class="text-black text-sm font-12 pt-2 hidden">
                            {{ \Carbon\Carbon::parse($press->post_date)->format('l, j F Y') }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

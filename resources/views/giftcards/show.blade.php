<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full overflow-hidden relative">
        <div class="container mx-auto px-4 py-12 flex flex-col md:flex-row">

            <!-- Left Section -->
            <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-[5%]">
                <h1 class="text-3xl font-bold text-green-900 uppercase font-therma mb-10">{{__('home.gift.title')}}</h1>
                <p class="mt-4">
                    {!! __('home.gift.content') !!}
               </p>
            </div>

            <!-- right Section -->
            <div class="md:w1/2 flex flex-col justify-stretch space-y-4 p-[5%]">
                <div class="mt-6 space-y-2">
                    <p class="flex items-center text-green-900">
                        📍 <span class="ml-2"><a href="https://www.google.com/maps?q=Maybachufer+23+12047+Berlin" target="_blank">Maybachufer 23, 12047 Berlin</a>
                        </span>
                    </p>
                    <p class="flex items-center text-green-900">
                        ✉️ <a href="mailto:kaimaisonberlin@gmail.com" class="ml-2">kaimaisonberlin@gmail.com</a>
                    </p>
                    <p class="flex items-center text-green-900">
                        <a href="tel:+493088773398">📞 030 88 77 33 98</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('components.images')
@endsection

<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full h-auto object-cover">
        <img src="{{ asset('images/home/home-bar.jpg') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
    </div>

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900">In der Presse</h2>
    
            <div class="flex flex-col md:flex-row items-center md:items-stretch shadow-lg space-y-4 md:space-y-0">
                <!-- Column 1 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" alt="Reserve 1" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Tomaten</h3>
                        <p class="text-black text-sm p-2 font-12">This is a short description of the first item.</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" alt="Reserver 2" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Garnenen</h3>
                        <p class="text-black text-sm p-2">This is a short description of the first item.</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}" alt="Reserve 3" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Kimchi Dongwan</h3>
                        <p class="text-black text-sm p-2">This is a short description of the first item.</p>
                    </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 text-right">News/Events</h2>
    
            <div class="flex flex-col md:flex-row items-center md:items-stretch shadow-lg space-y-4 md:space-y-0">
                <!-- Column 1 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" alt="Reserve 1" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Tomaten</h3>
                        <p class="text-black text-sm p-2">This is a short description of the first item.</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" alt="Reserver 2" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Garnenen</h3>
                        <p class="text-black text-sm p-2">This is a short description of the first item.</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}" alt="Reserve 3" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">Kimchi Dongwan</h3>
                        <p class="text-black text-sm p-2">This is a short description of the first item.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col sm:flex-row">
        <div class="w-full sm:w-1/3">
            <img src="{{ asset('images/dishes/bo.jpg') }}" alt="Bo 1" class="w-full h-80">
        </div>
        <div class="w-full sm:w-1/3">
            <img src="{{ asset('images/dishes/ca.jpg') }}" alt="Bo 1" class="w-full h-80">
        </div>

        <div class="w-full sm:w-1/3">
            <img src="{{ asset('images/dishes/vit.jpg') }}" alt="Bo 1" class="w-full h-80">
        </div>
    </div>
@endsection

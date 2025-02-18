<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full flex h-screen object-cover">
        <img src="{{ asset('images/home/home-bar.jpg') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
    </div>

    <div class="w-full" style="background: #111827">
        <div class="container mx-auto w-full text-center p-16">
            <h2 class="text-5xl font-bold text-green-900 uppercase font-therma ">{{__('home.menu.title')}}</h2>
                <p class="mt-4 text-white">
                    {{__('home.menu.menu_sub_text')}}
                </p>
            <div class="flex flex-col sm:flex-row w-full justify-start items-center sm:justify-center">
                <a href="{{ asset('pdfs/FOOD_MENU_ENG.pdf') }}" target="_blank"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.menu.button1')}}</a>
                
                <a href="{{ asset('pdfs/LUNCH_MENU.pdf') }}" target="_blank" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                    class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.menu.button2')}}</a>
                
                    <a href="{{ asset('pdfs/DRINKS_MENU.pdf') }}" target="_blank"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                        class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.menu.button3')}}</a>
            </div> 
        </div>
    </div>
    
    @include('components.images')
@endsection

<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')

    <div class="w-full bg-white relative overflow-hidden">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-[5%]">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma mb-10 ">{{__('home.about.title')}}</h1>
                    <p class="mt-4">
                        {{__('home.introduce.name')}}
                    </p>
                    <p class="mt-2">
                        <span class="font-bold text-green-900">❝Kai❞</span>, {{__('home.introduce.meaning_1')}} <span class="font-bold text-green-900">❝Maison❞</span>, {{__('home.introduce.meaning_2')}}
                    </p>
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 text-green-900 rounded-lg font-bold button-reservierung mt-10">
                    {{__('home.button_reserve')}}
                    </a>
                </div>

                <!-- Right Section (Image) -->
                <div data-aos="zoom-out-up" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
     class="w-full md:w-1/2 flex flex-col md:absolute top-bottom-0 right-0">
                    <img src="{{ asset('images/home/240824_Elgin11752.jpg') }}" alt="Kaimaison Bar" 
                    class="shadow-lg w-full object-cover">
                </div>

            </div>
        </div>
    </div>
    
    <div class="w-full bg-white relative overflow-hidden">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-end items-center md:items-stretch rounded-lg">
                    <!-- Left Section (Image) -->
                    <div data-aos="zoom-out-up" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                    class="w-full md:w-1/2 flex flex-col h-auto md:absolute top-0 bottom-0 left-0 z-50">
                        <img src="{{ asset('images/home/240824_Elgin12097.jpg') }}" alt="Kaimaison Tasty" 
                        class="shadow-lg w-full h-full object-cover">
                    </div>
                    
                    <!-- Right Section -->
                    <div class="md:w-1/2 flex flex-col justify-between space-y-4 p-[5%]">
                        <h1 class="text-5xl font-bold text-green-900 uppercase font-therma mb-10">{{__('home.about.us')}}</h1>
                        <p class="mt-4 text-black">
                            {{__('home.about.us1')}}
                        </p>
                        <p class="mt-2 text-black">
                            {{__('home.about.us2')}}
                        </p>
                </div>
            </div>
        </div>
    </div>
    
    @include('components.images')
@endsection

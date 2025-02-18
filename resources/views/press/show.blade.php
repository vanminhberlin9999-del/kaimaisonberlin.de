<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <!-- Press -->
    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
                
            <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                <!-- Column 1 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" 
                             data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                            alt="Reserve 1" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_1')}}</h3>
                        <p class="text-black text-sm p-2 font-12">{{__('home.press_section.desc_1')}}</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" 
                         data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                         alt="Reserver 2" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_2')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_2')}}</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}"  
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 3" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-themar text-4xl">{{__('home.press_section.title_3')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_3')}}</p>
                    </div>
                </div> 
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                <!-- Column 1 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" 
                             data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                            alt="Reserve 1" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_1')}}</h3>
                        <p class="text-black text-sm p-2 font-12">{{__('home.press_section.desc_1')}}</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" 
                         data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                         alt="Reserver 2" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_2')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_2')}}</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}"  
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 3" class="w-full h-auto">
                        <h3 class="text-green-900 text-xl p-2 font-themar text-4xl">{{__('home.press_section.title_3')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_3')}}</p>
                    </div>
                </div>

                
            </div>
    </div>
@endsection

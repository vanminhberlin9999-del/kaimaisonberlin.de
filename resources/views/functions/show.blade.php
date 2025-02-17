<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full flex h-screen object-fit">
        <img src="{{ asset('images/about-us/master-chef.png') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
    </div>

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-4 ">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.about.title')}}</h1>
                    <p class="mt-4 text-gray-700 font-lora">
                        {{__('home.introduce.name')}}
                    </p>
                    <p class="mt-2 text-gray-700">
                        <span class="font-bold text-green-900">❝Kai❞</span>, {{__('home.introduce.meaning_1')}} <span class="font-bold text-green-900">❝Maison❞</span>, {{__('home.introduce.meaning_2')}}
                    </p>
    
                    <div class="mt-6">
                        <p class="font-bold">{{__('home.introduce.open_time')}}</p>
                        <p> 🕒 {{__('home.introduce.monday')}}-{{__('home.introduce.sunday')}} 12:00-23:00</p>
                    </div>
    
                    <div class="mt-6 space-y-2">
                        <p class="flex items-center text-green-700">
                            📍 <span class="ml-2"><a href="https://www.google.com/maps?q=Maybachufer+23+12047+Berlin" target="_blank">Maybachufer 23, 12047 Berlin</a>
                            </span>
                        </p>
                        <p class="flex items-center text-blue-600">
                            ✉️ <a href="mailto:kaimaisonberlin@gmail.com" class="ml-2">kaimaisonberlin@gmail.com</a>
                        </p>
                        <p class="flex items-center text-gray-700">
                            <a href="tel:+493088773398">📞 030 88 77 33 98</a>
                        </p>
                    </div>
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 button-reservierung">
                    {{__('home.button_reserve')}}
                    </a>
                </div>

                <!-- Right Section (Image) -->
                <div
                data-aos="fade-left" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
     class="w-full md:w-1/2 flex flex-col h-auto">
                    <img src="{{ asset('images/home/home-saints.jpg') }}" alt="Kaimaison Bar" 
                    class="rounded-lg shadow-lg w-full h-full object-cover">
                </div>

            </div>
        </div>
    </div>
    
    <div class="w-full bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
                <!-- Left Section (Image) -->
                <div 
                data-aos="fade-right" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                class="w-full md:w-1/2 flex flex-col h-auto">
                    <img src="{{ asset('images/home/home-tasty.jpg') }}" alt="Kaimaison Tasty" 
                    class="shadow-lg rounded-lg w-full h-full object-cover">
                </div>
                
                <!-- Right Section -->
                <div class="md:w-1/2 flex flex-col justify-between space-y-4 p-4 py-12">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.about.us')}}</h1>
                    <p class="mt-4 text-gray-700 text-black">
                        {{__('home.special.section1')}}
                    </p>
                    <p class="mt-2 text-gray-700 text-black">
                        {{__('home.special.section2')}}
                    </p>
                    
                    <div class="mt-6 text-black">
                        <p class="font-bold">{{__('home.special.open_time')}}</p>
                        <p> 🕒 {{__('home.special.monday')}}-{{__('home.special.sunday')}} 12:00-23:00</p>
                    </div>
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 button-reservierung">
                    {{__('home.button_reserve')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
               
                 <!-- Right Section -->
                 <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-4 py-12">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.experience.title')}}</h1>
                    <p class="mt-4 text-gray-700 font-lora">
                        {{__('home.experience.with')}} <span class="font-bold text-green-900">❝Kai Maison❞</span> {{__('home.experience.section1')}}
    
                    </p>
                    <p class="mt-2 text-gray-700">
                        {{__('home.experience.section2')}}
                    </p>
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 button-reservierung">
                    {{__('home.button_reserve')}}
                    </a>
                </div>

                <!-- Left Section (Image) -->
                <div 
                data-aos="fade-left" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                class="w-full md:w-1/2  flex flex-col h-auto">
                    <img src="{{ asset('images/home/home-saints.jpg') }}" alt="Kaimaison Bar" 
                    class="rounded-lg shadow-lg w-full h-full object-cover">
                </div>

            </div>
        </div>
    </div>

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12 ">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">

                 <!-- Right Section (Image) -->
                 <div class="md:w-1/2 flex flex-col h-auto">
                    <img src="{{ asset('images/about-us/philosophie.jpg') }}" alt="Unsere Philosophie" class="rounded-lg shadow-lg w-full h-fullg object-cover">
                </div>
                
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-4">
                    <h2 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.philosophy.title')}}</h2>
                    <p class="mt-4 text-gray-700 font-lora">
                        {{__('home.philosophy.text1')}}
                    </p>
    
                    <p class="mt-4 text-gray-700 font-lora">
                        {{__('home.philosophy.text2')}}
                    </p>

                    <p>{{__('home.philosophy.text3')}}</p>
    
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 button-reservierung">
                    {{__('home.button_reserve')}}
                    </a>
                </div>
    
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app') 

@section('title', 'Kai Maison')

@section('content')

     <!-- Hình ảnh full width -->
     <div class="w-full flex h-screen object-fit">
        <img src="{{ asset('images/home/home-bar.jpg') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
    </div>
    

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-4 ">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.welcome')}}</h1>
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
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">{{__('home.special.title')}}</h1>
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
    


    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900">{{__('home.press_section.title')}}</h2>
    
            <div class="flex flex-col md:flex-row items-center md:items-stretch shadow-lg space-y-4 md:space-y-0">
                <!-- Column 1 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" 
                             data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                            alt="Reserve 1" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_1')}}</h3>
                        <p class="text-black text-sm p-2 font-12">{{__('home.press_section.desc_1')}}</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" 
                         data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                         alt="Reserver 2" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_2')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_2')}}</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}"  
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 3" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.press_section.title_3')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.press_section.desc_3')}}</p>
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
                        <img src="{{ asset('images/res/reserve_1.jpg') }}" 
                            data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 1" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.news_section.title_1')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.news_section.desc_1')}}</p>
                    </div>
                </div>
            
                <!-- Column 2 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_2.jpg') }}" 
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserver 2" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.news_section.title_2')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.news_section.desc_2')}}</p>
                    </div>
                </div>
            
                <!-- Column 3 -->
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                        <img src="{{ asset('images/res/reserve_3.jpg') }}" 
                        data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                        alt="Reserve 3" class="w-full h-auto rounded-lg">
                        <h3 class="text-green-900 text-xl p-2 font-therma text-4xl">{{__('home.news_section.title_3')}}</h3>
                        <p class="text-black text-sm p-2">{{__('home.news_section.title_3')}}</p>
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
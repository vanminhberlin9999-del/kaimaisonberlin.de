@extends('layouts.app') 

@section('title', 'Kai Maison')

@section('content')

     <!-- Hình ảnh full width -->
     <div class="w-full flex h-screen object-fit">
        <img src="{{ asset('images/home/home-bar.jpg') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
    </div>
    

    <div class="w-full bg-white relative overflow-hidden">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-[5%]">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma mb-10 ">{{__('home.welcome')}}</h1>
                    <p class="mt-4">
                        {{__('home.introduce.name')}}
                    </p>
                    <p class="mt-2">
                        <span class="font-bold text-green-900">❝Kai❞</span>, {{__('home.introduce.meaning_1')}} <span class="font-bold text-green-900">❝Maison❞</span>, {{__('home.introduce.meaning_2')}}
                    </p>
    
                    <div class="mt-6">
                        <p class="font-bold mb-4">{{__('home.introduce.open_time')}}</p>
                        <p> 🕒 {{__('home.introduce.monday')}}-{{__('home.introduce.sunday')}} 12:00-23:00</p>
                    </div>
    
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
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                    target="_blank"    
                    class="w-fit text-center mt-6 px-6 py-3 text-green-900 rounded-lg font-bold button-reservierung mt-6">
                    {{__('home.button_reserve')}}
                    </a>
                </div>

                <!-- Right Section (Image) -->
                <div
                data-aos="zoom-out-up" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
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
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma mb-10">{{__('home.special.title')}}</h1>
                    <p class="mt-4 text-black">
                        {{__('home.special.section1')}}
                    </p>
                    <p class="mt-2 text-black">
                        {{__('home.special.section2')}}
                    </p>
                    
                    <div class="mt-6 text-black mb-10">
                        <p class="font-bold mb-2">{{__('home.special.open_time')}}</p>
                        <p> 🕒 {{__('home.special.monday')}}-{{__('home.special.sunday')}} 12:00-23:00</p>
                    </div>
    
                    <a href="{{ route('menu', ['locale' => app()->getLocale()]) }}" target="_blank"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                class="w-fit text-center mt-8 inline-block px-6 py-3  text-green-900 bg-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.menu.button1')}}</a>
                
                <a href="{{ route('menu', ['locale' => app()->getLocale()]) }}" target="_blank" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                    class="w-fit text-center mt-8 inline-block px-6 py-3 text-green-900 bg-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.menu.button2')}}</a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="w-full bg-white overflow-hidden relative">
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-center md:items-stretch rounded-lg">
               
                 <!-- Left Section -->
                 <div class="md:w-1/2 flex flex-col justify-stretch space-y-4 p-[5%]">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma mb-10">{{__('home.experience.title')}}</h1>
                    <p class="mt-4">
                         {{__('home.experience.section1')}}
                    </p>
                    <p class="mt-2">
                        {{__('home.experience.section2')}}
                    </p>

                    <p class="mt-2" style="margin-bottom: 50px">
                        {{__('home.experience.section3')}}
                    </p>

                    <a href="{{ route('menu', ['locale' => app()->getLocale()]) }}" target="_blank" 
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-anchor-placement="top-bottom" data-aos-once="false"
                        class="w-fit text-center mt-8 inline-block px-6 py-3 text-green-900 bg-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">{{__('home.experience.btn_wine_menu')}}</a>
                    </div>
                </div>

                <!-- Right Section (Image) -->
                <div 
                data-aos="zoom-out-up" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                class="w-full md:w-1/2  flex flex-col h-auto md:absolute bottom-0 top-0 right-0">
                    <img src="{{ asset('images/home/240824_Elgin11582.jpg') }}" alt="Kaimaison Bar" 
                    class=" shadow-lg w-full h-full object-cover">
                </div>

            </div>
        </div>
    </div>

    <!-- Press -->
    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 mb-10">{{__('home.press_section.title')}}</h2>
    
            <div class="flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                @foreach($presses as $press)

                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-8">
                    <div class="w-full">
                       <a href="{{ route('post.show', $press->id) }}">
                            <img src="{{ asset('/storage/'.$press->feature_image) }}" 
                                data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                             alt="Reserve 1" class="w-full h-auto">
                       </a>
                        <h3 class="text-green-900 text-xl font-therma text-4xl">
                            <a href="{{ route('post.show', $press->id) }}" class="font-therma">{{ $press->title }}</a>
                        </h3>
                        <div class="text-black text-sm font-12 pt-2"> 
                            {{ $press->short_content }}   <!-- Limit the content to 150 chars -->
                        </div>
                        
                        <div class="text-black text-sm font-12 pt-2">
                            {{ \Carbon\Carbon::parse($press->post_date)->format('l, j F Y') }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="w-full bg-white">
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold uppercase font-therma text-5xl text-green-900 text-right mb-10">News/Events</h2>
    
            <div class="swiper-container flex flex-col md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                <div class="swiper-wrapper flex flex-wrap md:flex-row items-center md:items-stretch space-y-4 md:space-y-0">
                    @foreach($news_or_event as $post)
    
                    <div class="swiper-slide w-full md:w-1/3 flex flex-col items-center md:items-start text-center md:text-left p-3">
                        <div class="w-full">
                           <a href="{{ route('post.show', $post->id) }}">
                                <img src="{{ asset('/storage/'.$post->feature_image ) }}" 
                                    data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom" data-aos-mirror="true"
                                 alt="Reserve 1" class="w-full h-auto">
                           </a>
                            <h3 class="text-green-900 text-xl font-therma text-4xl">
                                <a href="{{ route('post.show', $post->id) }} " class="font-therma">{{ $post->title }}</a>
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

                <!-- Add navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,  // Show 3 posts at a time
            spaceBetween: 10,  // Space between posts
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,  // On medium screens, show 2
                },
                768: {
                    slidesPerView: 2,  // On smaller screens, show 1
                }
            }
        });
    </script>
    

    @include('components.images')
    
@endsection
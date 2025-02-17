<header class="top-0 left-0 w-full z-10 bg-transparent text-white">
    <div class="header-desktop mx-auto flex max-w-7xl items-center justify-between">
        
        <div class="flex-shrink-0 w-1/4 header-logo">
            <a href="{{ url('/') }}">
                <img src="/images/logos/logo_kaimaison.png" alt="kaimaison-logo" class="w-24 h-auto">
            </a>
        </div>
        
        <nav class="nav-header w-3/4 flex items-center justify-end p-6 lg:px-8 font-bold text-white" aria-label="Navigation">
            <a href="{{ app()->getLocale() == 'de' ? url('/de') : url('/') }}" class="font-therma p-4">
                {{ __('menu.home') }}
            </a>
            <a href="{{ route('menu', ['locale' => app()->getLocale()]) }}" class="font-therma p-4" >{{ __('menu.menu') }}</a>
            <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.about') }}</a>
            <a href="{{ route('press', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.press') }}</a>
            <a href="{{ route('events', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.events') }}</a>
            <a href="{{ route('functions', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.functions') }}</a>
            <a href="{{ route('giftcards', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.giftcards') }}</a>
            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="font-therma p-4">{{ __('menu.contact') }}</a>
           
            <a class="button-reservierung bg-green-900 hover:bg-green-800 font-therma font-bold pb-1 pt-1 pl-2 pr-2 text-center mr-4" target="_blank" style="color: #f5c2de !important"
                href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg">
                {{ __('menu.reserve') }}
            </a>
            
            <div x-data="{ open: false, locale: '{{ session('locale', 'en') }}' }" class="relative">
                <button @click="open = !open" class="px-2 py-2 rounded">🌍 <span x-text="locale.toUpperCase()" class="text-white"></span></button>
                
                <div x-show="open" @click.away="open = false" class="absolute mt-2 w-32 bg-white border rounded shadow">
                    <a @click="window.location.href = '/en'" class="block px-4 py-2 hover:bg-gray-100">🇬🇧</a>
                    <a @click="window.location.href = '/de'" class="block px-4 py-2 hover:bg-gray-100">🇩🇪</a>
                </div>
            </div>
            
            </nav>
    </div>

    <div x-data="{ open: false }" class="md:hidden flex justify-between items-start p-4">

        <!-- Nút menu trên mobile -->
        <a @click="open = !open" class="p-4  text-white rounded-md md:hidden block pt-20 font-bold font-therma text-3xl">
            ☰ Menu
        </a>
    
        <!-- Menu flyout -->
        <div x-show="open" x-transition class="absolute inset-0 w-screen h-screen bg-white z-50 shadow-lg transform transition-transform ease-in-out duration-300 pt-20 md:hidden text-center text-base" @click.away="open = false">
            <!-- Nút đóng menu -->
            <button @click="open = false" class="p-4 text-black absolute top-2 right-2 font-bold">✖</button>
            <ul class="p-4 space-y-4">
                <li>
                    <a href="{{ app()->getLocale() == 'de' ? url('/de') : url('/') }}" class="block text-green-900 font-therma text-3xl font-bold">{{ __('menu.home') }}</a>
                </li>
                <li>
                    <a href="{{ route('menu', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.menu') }}</a>
                </li>
                <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.about') }}</a></li>
                <li><a href="{{ route('press', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.press') }}</a></li>
                <li><a href="{{ route('events', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.events') }}</a></li>
                <li><a href="{{ route('functions', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.functions') }}</a></li>
                <li><a href="{{ route('giftcards', ['locale' => app()->getLocale()]) }}" class="block text-green-900 text-3xl font-therma font-bold">{{ __('menu.giftcards') }}</a></li>
                <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block text-green-900 font-therma text-3xl font-bold">{{ __('menu.contact') }}</a></li>
                <li>
                    <a class="button-reservierung bg-green-900 hover:bg-green-800 font-therma font-bold p-4 text-center mr-4" target="_blank" style="color: #f5c2de !important"
                    href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg">
                    {{ __('menu.reserve') }}
                </a>
            </ul>
            <div x-data="{ open: false, locale: '{{ session('locale', 'en') }}' }" class="relative mt-4 p-8">
                <button @click="open = !open" class="px-4 py-2 bg-gray-200 rounded">🌍 <span x-text="locale.toUpperCase()" class="text-black"></span></button>
            
                <div x-show="open" @click.away="open = false" class="absolute mt-2 w-32 bg-white border rounded shadow">
                    <a @click="window.location.href = '/en'" class="block px-4 py-2 hover:bg-gray-100">🇬🇧</a>
                    <a @click="window.location.href = '/de'" class="block px-4 py-2 hover:bg-gray-100">🇩🇪</a>
                </div>
            </div>
        </div>

        <div class="block md:hidden">
            <a href="{{ url('/') }}">
                <img src="/images/logos/logo_kaimaison.png" alt="kaimaison-logo" class="w-24 h-30">
            </a>
        </div>
    </div>
    
</header>
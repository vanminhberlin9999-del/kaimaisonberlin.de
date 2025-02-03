<header class="absolute top-0 left-0 w-full z-10 bg-transparent text-white">
    <div class="header-desktop mx-auto flex max-w-7xl items-center justify-between">
        
        <div class="flex-shrink-0 w-1/4 header-logo">
            <a href="{{ url('/') }}">
                <img src="/images/logos/logo_kaimaison.png" alt="kaimaison-logo" class="w-24 h-auto">
            </a>
        </div>

        <nav class="nav-header w-3/4 flex items-center justify-around p-6 lg:px-8 font-bold text-white" aria-label="Navigation">
            <a href="{{ url('/') }}" class="font-therma">Startseite</a>
            <a href="{{ url('speisekarte') }}" class="font-therma" >Speisekarte</a>
            <a href="{{ url('unsere-geschichte') }}" class="font-therma">Unsere Geschichte</a>
            <a href="{{ url('feiern-events') }}" class="font-therma">Feiern & Events</a>
            <a href="{{ url('kontakt') }}" class="font-therma">Kontakt</a>
           
            <a class="button-reservierung bg-green-900 hover:bg-green-800 font-therma font-bold p-4" target="_blank"
                href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg">Reservieren</a>
        </nav>

    </div>

    <div x-data="{ open: false }" class="flex justify-between items-start p-4">

        <!-- Nút menu trên mobile -->
        <a @click="open = !open" class="p-4  text-white rounded-md md:hidden block pt-20 font-bold font-therma text-3xl">
            ☰ Menu
        </a>
    
        <!-- Menu flyout -->
        <div x-show="open" x-transition class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform transition-transform ease-in-out duration-300 pt-20" @click.away="open = false">
            <!-- Nút đóng menu -->
            <button @click="open = false" class="p-4 text-black absolute top-2 right-2">✖</button>
            <ul class="p-4 space-y-4">
                <li><a href="{{ url('/') }}" class="block text-green-900 font-therma text-3xl font-bold">Startseite</a></li>
                <li><a href="{{ url('speisekarte') }}" class="block text-green-900 text-3xl font-therma font-bold">Speisekarte</a></li>
                <li><a href="{{ url('unsere-geschichte') }}" class="block text-green-900 text-3xl font-therma font-bold">Unsere Geschichte</a></li>
                <li><a href="{{ url('feiern-events') }}" class="block text-green-900 text-3xl font-therma font-bold">Feiern & Events</a></li>
                <li><a href="{{ url('kontakt') }}" class="block text-green-900 font-therma text-3xl font-bold">Kontakt</a></li>
                <li><a class="button-reservierung bg-green-900 hover:bg-green-800 text-3xl p-2 font-therma" target="_blank"
                    href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" >Reservierung</a></li>
            </ul> 
        </div>

        <div class="block md:hidden">
            <a href="{{ url('/') }}">
                <img src="/images/logos/logo_kaimaison.png" alt="kaimaison-logo" class="w-24 h-30">
            </a>
        </div>
    </div>
    
</header>
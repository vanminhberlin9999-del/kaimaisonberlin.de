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
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">Wilkommen zu KAI MAISON </h1>
                    <p class="mt-4 text-gray-700 font-lora">
                        Kai Maison ist ein von zwei leidenschaftlichen Vietnamesen gegründetes Gastronomie- und Handwerksprojekt im Herzen von Kreuzberg.
                    </p>
                    <p class="mt-2 text-gray-700">
                        <span class="font-bold text-green-900">❝Kai❞</span>, das japanische Wort für Meer und geben, und <span class="font-bold text-green-900">❝Maison❞</span>, das französische Wort für Haus, 
                        vereinen sich hier, um eine Ode an die Liebe und das Geben inmitten der endlosen Strömung des Lebens zu formen.
                    </p>
    
                    <div class="mt-6">
                        <p class="font-bold">Öffnungszeiten</p>
                        <p> 🕒 Montag-Sontag 12:00-23:00</p>
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
                        Reservieren
                    </a>
                </div>

                <!-- Right Section (Image) -->
                <div class="w-full md:w-1/2  flex flex-col h-auto">
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
                <div class="w-full md:w-1/2 flex flex-col h-auto">
                    <img src="{{ asset('images/home/home-tasty.jpg') }}" alt="Kaimaison Tasty" 
                    class="shadow-lg rounded-lg w-full h-full object-cover">
                </div>
                
                <!-- Right Section -->
                <div class="md:w-1/2 flex flex-col justify-between space-y-4 p-4 py-12">
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">Die Besonderheiten</h1>
                    <p class="mt-4 text-gray-700 text-black">
                        Die Küche von Kai Maison ist ein Spiegelbild ihrer eigenen Träume und Kreativität. Durch unermüdliches Probieren und Lernen haben die Gründer einzigartige Rezepte entwickelt - eine Fusion aus asiatischer und französisch-japanischer Kulinarik.
                    </p>
                    <p class="mt-2 text-gray-700 text-black">
                        Mit handgemachten Saucen und sorgfältig ausgewählten Zutaten wird hier jedes Gericht zu einem Kunstwerk. Es geht nicht nur darum, den Gaumen zu verwöhnen, sondern auch um die Bedeutung von Zeit und Aufmerksamkeit, die in jedes Gericht einfließt, um wahre Frische zu gewährleisten.
                    </p>
                    
                    <div class="mt-6 text-black">
                        <p class="font-bold">Öffnungszeiten</p>
                        <p> 🕒 Montag-Sontag 12:00-23:00</p>
                    </div>
    
                    <a href="https://www.opentable.de/r/kai-maison-reservations-berlin?restref=333144&lang=en-US&ot_source=Instagram&ot_campaign=Book+you+table&fbclid=PAAabTJpjwEpbn9y_QzOKHEpQjIlQXDfqRtGS9Nro1Ndx4nIr7WIYGwYlpzvY_aem_Adgi20XEity3e_e129yeLvz8tv80dwsPOj0D_Bi7gW4Y1D5ghLsne8vJu0KbA76Klzg" 
                        target="_blank"    
                        class="w-fit text-center mt-6 px-6 py-3  text-white rounded-lg hover:bg-green-800 button-reservierung">
                            Reservieren
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
                    <h1 class="text-5xl font-bold text-green-900 uppercase font-therma">Wilkommen zu KAI MAISON </h1>
                    <p class="mt-4 text-gray-700 font-lora">
                        Kai Maison ist ein von zwei leidenschaftlichen Vietnamesen gegründetes Gastronomie- und Handwerksprojekt im Herzen von Kreuzberg.
                    </p>
                    <p class="mt-2 text-gray-700">
                        <span class="font-bold text-green-900">❝Kai❞</span>, das japanische Wort für Meer und geben, und <span class="font-bold text-green-900">❝Maison❞</span>, das französische Wort für Haus, 
                        vereinen sich hier, um eine Ode an die Liebe und das Geben inmitten der endlosen Strömung des Lebens zu formen.
                    </p>
    
                    <div class="mt-6">
                        <p class="font-bold">Öffnungszeiten</p>
                        <p> 🕒 Montag-Sontag 12:00-23:00</p>
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
                        Reservieren
                    </a>
                </div>

                <!-- Left Section (Image) -->
                <div class="w-full md:w-1/2  flex flex-col h-auto">
                    <img src="{{ asset('images/home/home-saints.jpg') }}" alt="Kaimaison Bar" 
                    class="rounded-lg shadow-lg w-full h-full object-cover">
                </div>

            </div>
        </div>
    </div>

    <div class="w-full" style="background: #111827">
        <div class="container mx-auto w-full text-center p-16">
            <h2 class="text-5xl font-bold text-green-900 uppercase font-therma ">Unsere Speisekarte</h2>
                <p class="mt-4 text-white">
                    Kai Maison’s Menü ist eine Symbiose aus asiatischen und französisch-japanischen Einflüssen. In der Getränkekarte findet man den Zauber der Einfachheit. Natürliche Zutaten werden liebevoll zu hausgemachten Limonaden und Cocktails verarbeitet. Und nicht zu vergessen, eine breite Auswahl an Weinnatur, sorgsam ausgewählt von einem Weinkollektiv.
                </p>
            <div class="flex flex-col sm:flex-row w-full justify-start items-center sm:justify-center">
                <a href="{{ asset('pdfs/FOOD_MENU_ENG.pdf') }}" target="_blank" class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">Speisekarte</a>
                <a href="{{ asset('pdfs/LUNCH_MENU.pdf') }}" target="_blank" class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">Mittagsmenü</a>
                <a href="{{ asset('pdfs/DRINKS_MENU.pdf') }}" target="_blank" class="w-fit text-center mt-8 inline-block px-6 py-3 bg-green-900 text-white rounded-lg hover:bg-green-800 mr-2 button-reservierung">Getränkekarte</a>
            </div> 
        </div>
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
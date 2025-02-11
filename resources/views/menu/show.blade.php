<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full flex h-screen object-cover">
        <img src="{{ asset('images/home/home-bar.jpg') }}" alt="Kaimaison Bar" class="w-full h-auto object-cover">
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
@endsection

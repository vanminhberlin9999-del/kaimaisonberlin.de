<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   
    <div class="w-full h-screen object-cover">
        <img src="{{ asset('images/contact/contact.jpg') }}" alt="Kaimaison Kontakt" class="w-full h-screen object-cover">
    </div>

    <div class="w-full max-w-2xl mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{__('home.contact.title')}}</h2>
    
        <p class="text-gray-700 dark:text-gray-300 mb-6">
            {{__('home.contact.desc')}}
        </p>
    
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700 dark:text-gray-300 mb-1">{{__('home.contact.name')}}</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg bg-gray-100 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
    
            <div>
                <label class="block text-gray-700 dark:text-gray-300 mb-1">{{__('home.contact.email')}}</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg bg-gray-100 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
    
            <div>
                <label class="block text-gray-700 dark:text-gray-300 mb-1">{{__('home.contact.message')}}</label>
                <textarea name="message" rows="4" class="w-full p-3 border rounded-lg bg-gray-100 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
            </div>
    
            <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition border text-2xl">
                {{__('home.contact.button')}}
            </button>
        </form>
    </div>
    
    
@endsection 

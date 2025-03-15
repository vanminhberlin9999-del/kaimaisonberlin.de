<!-- resources/views/post/show.blade.php -->

@extends('layouts.app')

@section('title', 'Speisekarte') 

@section('content')
   

    <div class="w-full" style="background: white">
        <div class="container mx-auto w-full p-4 sm:p-8 md:p-16">
            <h2 class="text-5xl font-bold uppercase font-therma text-green-900 text-left">{{__('home.menu.title')}}</h2>
            <p class="mt-4 text-green-900">
                {{__('home.menu.menu_sub_text')}}
            </p>

            <div class="max-w-3xl mx-auto mt-10" x-data="{ activeTab: 'food' }">
                <!-- Tabs -->
                <div class="flex space-x-4 pb-2">
                    <button @click="activeTab = 'food'" 
                        :class="activeTab === 'food' ? 'border-b-2 border-green-900 text-green-900' : 'text-gray-900'"
                        class="px-4 py-2 text-lg font-semibold focus:outline-none">
                        FOOD MENU
                    </button>
                    <button @click="activeTab = 'drinks'" 
                        :class="activeTab === 'drinks' ? 'border-b-2 border-green-900 text-green-900' : 'text-gray-900'"
                        class="px-4 py-2 text-lg font-semibold focus:outline-none">
                        DRINKS MENU
                    </button>
                </div>
        
                <!-- Food Menu -->
                <div x-show="activeTab === 'food'" class="mt-4">
                    <div class="p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold text-green-900 underline">APERITIF X SALAD</h2>

                        <h3 class="underline text-m mt-6 mb-2">Hot Aperitif x Salad:</h3>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Spicy Edamame</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Soy beans, sea salt, soy x chili sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-lg">
                                    <span>Gyoza Bay</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>7€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Prawn, chicken, vegetable dumplings, umami sauce</p>
                            </li>

                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Crispy Rock Shrimp</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>8.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Prawn tempura, honey mayo, almonds</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Black Tori Karaage</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>7€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Fried corn chicken, charcoal, Japanese mayo, lemon</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Sun Kai Scallops</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>11€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Grilled scallops, carrot puree, scallion, yuzu dressing</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Watermelon Calamari</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>10€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Crispy squid, watermelon, coriander, orange x ginger ponzu</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>Hokkaido Tako</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>13€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Grilled octopus, tomato, avocado, onion, sesame sauce</p>
                            </li>
                        </ul>

                        <h3 class="underline text-m mt-10 mb-2">Cold Aperitif x Salad:</h3>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>CEVICHE 44</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>9.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Organic salmon & tuna, tomato, onions, ceviche sauce</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>BEEF TATAKI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>11.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Flamed beef, onions, dried flowers, cold wafu sauce</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>KAI SALAD</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>12€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Crispy prawn, mixed salad, chili mayo, yuzu x truffle dressing</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>TUNA PONZU TRUFFLE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>12.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Tuna tataki, crispy garlic, chili, truffle, ponzu</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>SAKE NO TATAKI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>10.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Flamed salmon, sesame, passionfruit x yuzu</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>BLACK TRUFFLE SPINACH</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>9€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Baby spinach, truffle, fish roe, su x miso</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>DE BOEUF TARTARE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>13€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Beef tenderloin, egg yolk, black caviar, tartare sauce</p>
                            </li>
                        </ul>                        

                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">TEMAKI X TACO</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>TEMAKI SALMON</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Fresh salmon, pickles, scallion, teriyaki x miso</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>TEMAKI KING CRAB</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>7.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">King crab, truffle, pickles, scallion, spicy miso</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>SHRIMP TACO</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6€</span>
                                </div>
                                <p class="text-gray-800 text-sm">King prawn, pickles, coriander, chili mayo</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>CHICKEN TACO</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Chicken, pickles, coriander, chili mayo</p>
                            </li>
                        
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>BEEF TACO</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Beef, pickles, coriander, chili mayo</p>
                            </li>
                        </ul>

                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">MAINS</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>CARI MAISON</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>16€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Yellow curry, crispy chicken, pumpkin, rice, mango, basil</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>DUCK UMAMI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>18€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Crispy duck, vegetables, coriander, umami x miso</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>PAD THAI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>17€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Fried flat rice noodles, prawn, egg, pak choi, sprouts, dried onions, peanuts</p>
                            </li>
                        </ul>  
                        <p class="text-l text-green-900 font-bold mt-10">VEGGIE OPTION X TOFU - 2€</p>
                        

                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">SOUPS</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>MISO SOUP</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>4.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Miso, seaweed, scallion, tofu, salmon</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>SWEET SOUR</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Pineapple, tomato, sprouts, tamarind broth, prawn</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>WANTON</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Chicken prawn dumpling, pak choi, mushroom</p>
                            </li>
                        </ul>
                        
                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">MAISON X GREEN</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>STUFFED TOFU</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>9€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Grilled tofu, vegetables, mushroom, sprouts, yardlong beans, umami sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>FUNGI FOREST</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>9.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Bio tofu, king oyster, shiitake, chanterelle, sweet potato puree, vegan butter x sake sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>WILD BROCCOLINI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>8.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Grilled broccoli, carrot puree, crispy tapioka, soy x garlic</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>NAPPA CABBAGE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>8€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Cabbage rolls, shiitake, tofu, scallion, soy sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>GRILLED EGGPLANT</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>9€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Grilled eggplant, scallion, peanuts, coriander, bonito, miso sauce</p>
                            </li>
                        </ul>
                        
                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">KAI X GRILL SPECIAL</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>SALMON ORGANIC</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>20€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Salmon filet 230g, grilled asparagus, carrot puree, salmon roe, miso sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>DUCKING ORANGE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>21€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Duck filet 220g, peas, baby carrots, sweet potato puree, orange sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>MAIS CHICKEN TERIYAKI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>19€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Boneless chicken thigh, yardlong bean, baby corn, corn puree, teriyaki sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>RIB EYE YONDU</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>23€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Ribeye steak 250g, tomato, baby broccoli, sweet potato puree, yondu x umami sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>KING YASAI UDON</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>22€</span>
                                </div>
                                <p class="text-gray-800 text-sm">King prawn, udon, pak choi, enoki, scallion, nori, butter x sake sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>FILET DE BOEUF</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>26€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Beef tenderloin 250g, grilled asparagus, shiitake, oyster mushroom, sweet potato fries, caramel sauce</p>
                            </li>
                        </ul>
                        
                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">DESSERTS</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>TIRAMISU MATCHA</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Green tea, matcha, vanilla</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>CREME BRULEE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>6€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Vanilla, cream, brown sugar</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>MANGO PANNA COTTA</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Mango, cream, coco x tapioca sauce</p>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>CHE BI DO</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5.5€</span>
                                </div>
                                <p class="text-gray-800 text-sm">Hokkaido pumpkin pudding, coconut milk, cane sugar, mungbean</p>
                            </li>
                        </ul>
                        
                        <h2 class="text-xl font-bold text-green-900 underline mt-20 mb-5">SIDES</h2>
                        <ul class="space-y-4">
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>WHITE RICE</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>5.5€</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>UDON</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>7€</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>KIM CHI</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>8.5€</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>SWEET POTATO FRIES</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>4.5€</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex items-baseline text-m">
                                    <span>EXTRA SAUCES</span> 
                                    <span class="flex-grow border-b border-dotted mx-2 border-dotted-menu"></span>
                                    <span>2.5€</span>
                                </div>
                            </li>
                        </ul>

                        <!-- Kai tasting menu -->
                        <h2 class="text-xl  text-green-900  mt-20 mb-5">KAI TASTING MENU</h2>
                        <p class="text-gray-800 text-sm mt-10 mb-2">— FOR TWO —</p>
                        <span class="mb-5">45€ per person</span>

                        <ul class="space-y-4 mt-10">
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>CEVICHE</span> 
                                    <span>Organic salmon & tuna, tomato, onions, ceviche sauce</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>CHICKEN TACO</span> 
                                    <span>Chicken, pickles, coriander, chili mayo</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>BLACK TRUFFLE SPINACH</span>
                                    <span>Baby spinach, truffle, fish roe, su x miso</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>GRILLED EGGPLANT</span>
                                    <span>Grilled eggplant, scallion, peanuts, coriander, bonito, miso sauce</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>YASAI UDON</span>
                                    <span>Udon, pak choi, enoki, scallion, butter x sake sauce</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>RIB EYE YONDU</span>
                                    <span>Rib eye steak 220g, tomato, baby broccoli, sweet potato puree, yondu x umami sauce</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>DUCKING ORANGE</span>
                                    <span>Duck filet 250g, peas, baby carrots, sweet potato puree, orange sauce</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>CREME BRULEE</span>
                                    <span>Vanilla, cream, brown sugar</span>
                                </div>
                            </li>
                            <li class="flex flex-col">
                                <div class="flex flex-col text-m">
                                    <span>HOKKAIDO PUDDING</span>
                                    <span>Hokkaido pumpkin, coconut milk, cane sugar, mungbean</span>
                                </div>
                            </li>
                            
                        </ul>


                    </div>
                </div>
        
                <!-- Drink Menu -->
                <div x-show="activeTab === 'drinks'" class="mt-4">
                    @include('menu.drink')
                </div>
            </div>
        </div>
    </div>
    
    @include('components.images')
@endsection

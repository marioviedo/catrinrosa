<header>
    <div class="w-full container px-2 mx-auto fixed right-0 left-0 opacity-75">
        <div x-data="{ open: false }" class="flex flex-col bg-black text-white max-w-screen-2xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">

                <a href="{{route('home')}}" class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    <img src="{{asset('images/logoheader_color.png')}}" class=" w-16 md:w-32 lg:w-32 xl:w-32" alt="">
                </a>
                
                <!-- dropdown button -->
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- end dropdown button -->

            </div>
            <!-- navbar -->
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow divide-x gap-4 divide-pink-600 pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <!-- Navigation Buttons -->
                <a class="{{request()->routeIs('home') ? 'text-pink-600 ':''}}px-4 py-2 mt-2 text-lg font-semibold hover:text-pink-600 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('home')}}">Inicio</a>
                <!-- recetas dropdown button -->
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                  <button @click="open = !open" class="{{request()->routeIs('recetas') ? 'text-pink-600 ':''}}flex flex-row items-center w-full px-4 py-2 mt-2 text-lg font-semibold text-left bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:text-pink-600 focus:text-pink-600 focus:outline-none focus:shadow-outline">
                    <span>Recetas</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 shadow bg-black">
                      <a class="block px-4 py-2 mt-2 text-lg font-semibold bg-transparent hover:text-pink-600 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('recetas', 'Postres')}}">Postres</a>
                      <a class="block px-4 py-2 mt-2 text-lg font-semibold bg-transparent hover:text-pink-600 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('recetas', 'Cocteles')}}">Cócteles</a>                    
                    </div>
                  </div>
                </div> 
                <!-- end recetas dropdown button -->
                <a class="{{request()->routeIs('mercancia') ? 'text-pink-600 ':''}}px-4 py-2 mt-2 text-lg font-semibold hover:text-pink-600 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('mercancia')}}">Mercancia</a>
                <a class="{{request()->routeIs('contacto') ? 'text-pink-600 ':''}}px-4 py-2 mt-2 text-lg font-semibold mr-4 hover:text-pink-600 md:mt-0 focus:outline-none focus:shadow-outline" href="{{route('contacto')}}">Contacto</a>
                
                <!-- end Navigation Buttons-->

            </nav>
            <!-- end nav bar -->
        </div>
    </div>
</header>

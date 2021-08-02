@extends('layouts.template')

@section('title', 'Contacto')
    
@section('content')
    @isset($validate)
    <div class="flex bg-green-600 mb-4 text-white">
        <div class="w-16 bg-green">
            <div class="p-4">
                <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M468.907 214.604c-11.423 0-20.682 9.26-20.682 20.682v20.831c-.031 54.338-21.221 105.412-59.666 143.812-38.417 38.372-89.467 59.5-143.761 59.5h-.12C132.506 459.365 41.3 368.056 41.364 255.883c.031-54.337 21.221-105.411 59.667-143.813 38.417-38.372 89.468-59.5 143.761-59.5h.12c28.672.016 56.49 5.942 82.68 17.611 10.436 4.65 22.659-.041 27.309-10.474 4.648-10.433-.04-22.659-10.474-27.309-31.516-14.043-64.989-21.173-99.492-21.192h-.144c-65.329 0-126.767 25.428-172.993 71.6C25.536 129.014.038 190.473 0 255.861c-.037 65.386 25.389 126.874 71.599 173.136 46.21 46.262 107.668 71.76 173.055 71.798h.144c65.329 0 126.767-25.427 172.993-71.6 46.262-46.209 71.76-107.668 71.798-173.066v-20.842c0-11.423-9.259-20.683-20.682-20.683z"/><path d="M505.942 39.803c-8.077-8.076-21.172-8.076-29.249 0L244.794 271.701l-52.609-52.609c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.077-8.077 21.172 0 29.249l67.234 67.234a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058L505.942 69.052c8.077-8.077 8.077-21.172 0-29.249z"/></svg>
            </div>
        </div>
        <div class="w-auto text-grey-darker items-center p-4">
            <span class="text-lg font-bold pb-4">
                ¡Mensaje enviado!
            </span>
            <p class="leading-tight">
                El mensaje se envio correctamente
            </p>
        </div>
    </div>
    @endisset
    <div class="py-2 text-white">
        <div class="container px-2 text-lg text-center">
            <p>Contactanos por medio de nuestras redes sociales en:</p>
        </div>  
        <!-- redes sociales zone -->      
        <div class="container px-2 mx-auto flex flex-row py-4 gap-5 justify-center">
            <!-- Facebook button -->                                    
            <div>
                <a href="https://www.facebook.com/catrinrosatequila" target="_blank">
                    <svg class="w-16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 408.788 408.788" style="enable-background:new 0 0 408.788 408.788;" xml:space="preserve">
                    <path style="fill:#475993;" d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085
                        h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882
                        v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955
                        l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087
                        c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085
                        C408.786,24.662,384.124,0,353.701,0z"/>
                    </svg>
                </a>
            </div>                                  
            <!-- end Facebook button -->

            <!-- Instagram button -->                                    
            <div>
                <a href="https://www.instagram.com/catrinrosatequila/" target="_blank">
                    <svg class="w-16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">                    
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                        <stop  offset="0" style="stop-color:#E09B3D"/>
                        <stop  offset="0.3" style="stop-color:#C74C4D"/>
                        <stop  offset="0.6" style="stop-color:#C21975"/>
                        <stop  offset="1" style="stop-color:#7024C4"/>
                        </linearGradient>
                        <path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722
                            c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156
                            C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156
                            c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722
                            c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>                            
                        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                        <stop  offset="0" style="stop-color:#E09B3D"/>
                        <stop  offset="0.3" style="stop-color:#C74C4D"/>
                        <stop  offset="0.6" style="stop-color:#C21975"/>
                        <stop  offset="1" style="stop-color:#7024C4"/>
                        </linearGradient>
                        <path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517
                            S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083
                            s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"/>
                        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57" x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                        <stop  offset="0" style="stop-color:#E09B3D"/>
                        <stop  offset="0.3" style="stop-color:#C74C4D"/>
                        <stop  offset="0.6" style="stop-color:#C21975"/>
                        <stop  offset="1" style="stop-color:#7024C4"/>
                        </linearGradient>
                        <circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15"/>
                    </svg>
                </a>
            </div>                                 
            <!-- end Instagram button -->
        </div>    
        <!-- end redes sociales zone -->
        <div class="container px-2 text-lg text-center">
            <p>Tambien puedes mandarnos un correo a: <span class="text-pink-600 px-1">contacto@catrinrosa.com</span></p>
            <p>o rellena el siguiente formulario y nosotros nos comunicamos contigo</p>            
        </div>  
        <!-- form -->
        <div class="container px-2 mx-auto flex justify-center py-4">
            <div class="rounded-lg border-2 border-pink-600">
                <form class=" p-6 text-lg" action="{{route('contacto.store')}}" method="post">
                    @csrf
                    <div class="flex justify-center gap-3 pb-4">
                        <label class="flex items-center" for="name">Nombre:</label>
                        <input class=" py-2 px-3 text-black rounded-md flex-grow" type="text" id="name" name="name" required>
                    </div>
                    <div class="flex gap-3 pb-4">
                        <label class="flex items-center" for="email">Correo: </label>
                        <input class=" py-2 px-3 text-black rounded-md flex-grow" type="email" id="email" name="email" required>
                    </div>
                    <div class="flex gap-3 pb-4">
                        <label class="flex items-center" for="phone">Numero de telefono: </label>
                        <input class="py-2 px-3 text-black rounded-md flex-grow" type="number" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="flex flex-col gap-3 pb-4">
                        <label class="flex items-center" for="message">Mensaje: </label>
                        <textarea class="py-2 px-3 rounded-md shadow-sm focus:outline-none text-black" name="message" id="message" cols="30" rows="4" maxlength="210" required></textarea>
                    </div>
                    <div class="flex justify-center">
                        <div class="flex justify-center">
                            <button class="rounded-lg border-green-600 border-2 text-center hover:bg-green-600 py-2 px-7" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end form -->   
    </div>
@endsection
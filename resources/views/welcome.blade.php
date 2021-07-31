@extends('layouts.template')

@section('title', 'Catrin Rosa')
    
@section('content')
    <div class="text-white">
        <!-- main Image -->
        <div class="bg-main-image h-screen bg-center xl:bg-cover md:bg-cover"></div>
        <!-- end main image -->

        <!-- information 1 -->
        <div class="flex flex-row flex-wrap md:flex-nowrap lg:flex-nowrap xl:flex-nowrap px-4 py-4">
            <div class="flex flex-grow flex-col justify-center pr-2">
                <div>
                    <h1 class="text-center text-2xl">Texto 1</h1>
                </div>
                <div class="max-w-7xl">
                    <p class=" text-xl overflow-clip break-words">
                        Sencillas, sonrientes y llenas de ingenuidad, como la musulmana Schehrazada, su madre suculenta que las dió a luz en el misterio; fermentando con emoción en los brazos de un príncipe sublime —lúbrico y feroz—, bajo la mirada enternecida de Alah, clemente y misericordioso.
                        Al venir al mundo fueron delicadamente mecidas por las manos de la lustral Doniazada, su buena tía
                    </p>
                </div>
            </div>
            <div>
                <img class="" src="{{asset('images/tequila3Medium.jpg')}}" alt="">
            </div>
        </div>
        <!-- end information -->

        <!-- information with background image -->
        <div class="bg-main-image-4 h-screen bg-center xl:bg-cover md:bg-cover flex items-center">
            <div class="max-w-xl ">                
                <p class="pl-4 text-left text-xl overflow-clip break-words backdrop-filter backdrop-blur-lg">
                    Sencillas, sonrientes y llenas de ingenuidad, como la musulmana Schehrazada, su madre suculenta que las dió a luz en el misterio; fermentando con emoción en los brazos de un príncipe sublime —lúbrico y feroz—, bajo la mirada enternecida de Alah, clemente y misericordioso.
                    Al venir al mundo fueron delicadamente mecidas por las manos de la lustral Doniazada, su buena tía
                </p>                
            </div>
        </div>
        <!-- end information with background image -->

        <!-- information 2 -->
        <div class="flex flex-row flex-wrap md:flex-nowrap lg:flex-nowrap xl:flex-nowrap px-4 py-4">
            <div>
                <img class="flex justify-center" src="{{asset('images/tequila2Medium.jpg')}}" alt="">
            </div>
            <div class="flex flex-grow flex-col justify-center pl-2">
                <div>
                    <h1 class="text-center text-2xl">Texto 2</h1>
                </div>
                <div class="max-w-7xl">
                    <p class=" text-xl overflow-clip break-words">
                        Sencillas, sonrientes y llenas de ingenuidad, como la musulmana Schehrazada, su madre suculenta que las dió a luz en el misterio; fermentando con emoción en los brazos de un príncipe sublime —lúbrico y feroz—, bajo la mirada enternecida de Alah, clemente y misericordioso.
                        Al venir al mundo fueron delicadamente mecidas por las manos de la lustral Doniazada, su buena tía
                    </p>
                </div>
            </div>
        </div>
        <!-- end information 2 -->

        <!-- information 3 -->
        <div class="flex flex-row flex-wrap md:flex-nowrap lg:flex-nowrap xl:flex-nowrap px-4 pb-4">
            <div class="flex flex-grow flex-col justify-center pl-2">
                <div>
                    <h1 class="text-center text-2xl">Texto 3</h1>
                </div>
                <div class="max-w-7xl">
                    <p class=" text-xl overflow-clip break-words">
                        Sencillas, sonrientes y llenas de ingenuidad, como la musulmana Schehrazada, su madre suculenta que las dió a luz en el misterio; fermentando con emoción en los brazos de un príncipe sublime —lúbrico y feroz—, bajo la mirada enternecida de Alah, clemente y misericordioso.
                        Al venir al mundo fueron delicadamente mecidas por las manos de la lustral Doniazada, su buena tía
                    </p>
                </div>
            </div>
            <div>
                <img class="flex justify-center" src="{{asset('images/tequilaMedium.jpg')}}" alt="">
            </div>
        </div>
        <!-- end information 3 -->
    </div>
    
@endsection
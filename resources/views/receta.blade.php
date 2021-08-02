@extends('layouts.template')

@section('title', $receta->title)
    
@section('content')
<div class="text-white container mx-auto px-2">
    <div class="flex flex-row flex-wrap justify-center gap-4">               
        <div class="flex justify-center">
            <div>
                <img class="w-64 h-64" src="{{asset($receta->image)}}" alt="">
            </div>        
        </div>  
        <div class="flex flex-col">
            <div class="flex justify-center py-2 px-2">
                <span class="font-extrabold">{{$receta->title}}</span>
            </div>
            <div class="flex justify-center py-2 px-2 break-words">
                <span class="max-w-xl">{{$receta->description}}</span>
            </div>            
        </div>                  
    </div>
</div>
@endsection
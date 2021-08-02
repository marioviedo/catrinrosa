@extends('layouts.template')

@section('title', 'Recetas')
    
@section('content')
<div class="text-black container mx-auto px-2">
    <div class="font-cursive-recipes flex flex-row flex-wrap gap-4">
        @foreach ($var as $item)
            <a href="{{route('recetas.show', ['tipo'=>'Postres', 'receta'=>$item])}}">
                <div class=" bg-white w-max h-max flex flex-col justify-center">
                    <div>
                        <img class="w-64 h-64 p-4 h" src="{{asset($item->image)}}" alt="">
                    </div>
                    <div class="flex justify-center py-2 px-2">
                        <span class="font-semibold tracking-wider text-xl">{{$item->title}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
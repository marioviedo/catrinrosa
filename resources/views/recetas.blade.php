@extends('layouts.template')

@section('title', 'Recetas')
    
@section('content')
<div class="text-white">
    {{$var}}
</div>

<style>
    .hex:before {
    content: " ";
    width: 0; height: 0;
    border-bottom: 30px solid #6C6;
    border-left: 52px solid transparent;
    border-right: 52px solid transparent;
    position: absolute;
    top: -30px;
}

.hex {
    margin-top: 30px;
    width: 104px;
    height: 60px;
    background-color: #6C6;
    position: relative;
    
}

.hex:after {
    content: "";
    width: 0;
    position: absolute;
    bottom: -30px;
    border-top: 30px solid #6C6;
    border-left: 52px solid transparent;
    border-right: 52px solid transparent;
}
    }
</style>

<div class="hex"></div>
<div class="hex"></div>
@endsection
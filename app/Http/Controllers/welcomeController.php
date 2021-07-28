<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function recetasIndex(){
        return view('recetas');
    }

    public function mercanciaIndex(){
        return view('mercancia');
    }

    public function contactoIndex(){
        return view('contacto');
    }
}

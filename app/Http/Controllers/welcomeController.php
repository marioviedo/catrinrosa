<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function mercanciaIndex(){
        return view('mercancia');
    }

    public function contactoIndex(){
        return view('contacto');
    }
}

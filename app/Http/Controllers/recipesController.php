<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class recipesController extends Controller
{
    public function recetasIndex($tipo){
        $var = Recipe::where('category', $tipo)->get();        
        return view('recetas', compact('var'));        
    }

    public function recetasShow($tipo, Recipe $receta){
        return view('receta', compact('receta'));
    }
}

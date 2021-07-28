<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [welcomeController::class, 'index'])->name('home');
Route::get('recetas', [welcomeController::class, 'recetasIndex'])->name('recetas');
Route::get('mercancia', [welcomeController::class, 'mercanciaIndex'])->name('mercancia');
Route::get('contacto', [welcomeController::class, 'contactoIndex'])->name('contacto');


<?php

use App\Http\Controllers\PokemonController;
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

Route::get('/', [PokemonController::class, 'index'])->name('pokemon.index');

// CRUD -> CREATE
Route::get('/admin/pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::post('/admin/pokemon/store', [PokemonController::class, 'store'])->name('pokemon.store');
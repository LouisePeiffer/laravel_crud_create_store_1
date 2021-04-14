<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index () {
        $dataPokemons = Pokemon::all();
        return view('welcome', compact('dataPokemons'));
    }
    public function create () {
        return view('backoffice.createPokemon');
    }
    public function store (Request $request) {
        // dd($request->nom)
        $pokemon = new Pokemon();
        $pokemon->nom = $request->nom;
        $pokemon->type= $request->type;
        $pokemon->niveau = $request->niveau;
        $pokemon->save();
        return redirect()->route('pokemon.index');
        // dd('test');
    }
}

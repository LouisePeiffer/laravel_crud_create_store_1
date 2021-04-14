@extends('layouts.index')

@section('content')
    <a href="{{route('pokemon.create')}}">Go rajouter un pokemon</a>
    <div class="row m-5">
        @foreach ($dataPokemons as $pokemon)
            <div class="col-3">
                {{$pokemon->nom}}
            </div>
        @endforeach
    </div>
@endsection
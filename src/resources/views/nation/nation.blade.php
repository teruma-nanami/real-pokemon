@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>全国図鑑</h1>
    <div class="row">
      {{-- @foreach ($pokemons as $pokemon) --}}
        <div class="col-md-3">
          {{-- <div class="card @if (in_array($pokemon->id, $caughtPokemons)) bg-success @endif">
            <div class="card-body">
              <h5 class="card-title">{{ $pokemon->name }}</h5>
              <p class="card-text">タイプ: {{ $pokemon->type }} @if ($pokemon->type2)
                  , {{ $pokemon->type2 }}
                @endif --}}
              </p>
              {{-- <p class="card-text">特性: {{ $pokemon->ability->ability_name }}</p>
              <p class="card-text">夢特性: {{ $pokemon->dreamAbility->ability_name }}</p> --}}
              <button class="btn btn-primary">捕まえた！</button>
            </div>
          </div>
        </div>
      {{-- @endforeach --}}
    </div>
  </div>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\UserPokemon;
use Illuminate\Support\Facades\Auth;

class NationalController extends Controller
{
	public function index()
	{
		// $user = Auth::user();
		// $pokemons = Pokemon::with(['ability', 'dreamAbility'])->get();
		// $caughtPokemons = UserPokemon::where('user_id', $user->id)->pluck('pokemon_id')->toArray();

		return view('nation.nation');
	}
}

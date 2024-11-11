<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPokemonsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_pokemons', function (Blueprint $table) {
			$table->foreignId('user_id')->constrained('users');
			$table->foreignId('pokemon_id')->constrained('pokemons');
			$table->boolean('caught');
			$table->timestamps();
			$table->primary(['user_id', 'pokemon_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('user_pokemons');
	}
}

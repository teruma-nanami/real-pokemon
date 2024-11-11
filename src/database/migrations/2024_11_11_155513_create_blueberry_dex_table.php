<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlueberryDexTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blueberry_dex', function (Blueprint $table) {
			$table->id();
			$table->string('game_name');
			$table->foreignId('user_id')->constrained('users');
			$table->foreignId('pokemon_id')->constrained('pokemons');
			$table->foreignId('dex_id')->constrained('dex_entries');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blueberry_dex');
	}
}

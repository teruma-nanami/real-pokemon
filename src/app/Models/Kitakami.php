<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitakami extends Model
{
	use HasFactory;

	protected $fillable = [
		'game_name',
		'user_id',
		'pokemon_id',
		'dex_id',
	];
}

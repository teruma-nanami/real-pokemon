<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DexEntry extends Model
{
	use HasFactory;

	protected $fillable = [
		'dex_id',
		'pokemon_id',
		'version',
	];
}

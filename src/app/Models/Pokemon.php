<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'type',
		'type2',
		'ability_id',
		'dream_ability_id'
	];

	public function ability()
	{
		return $this->belongsTo(Ability::class);
	}

	public function dreamAbility()
	{
		return $this->belongsTo(DreamAbility::class);
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;

    protected $fillable = [
        'ability_name',
        'description'
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_ability');
    }
}

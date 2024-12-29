<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitakamiDex extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokemon_id',
        'dex_order',
    ];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}

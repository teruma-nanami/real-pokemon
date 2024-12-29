<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dex_id',
        'type',
        'type2',
        'ability_id1',
        'ability_id2',
        'dream_ability_id',
    ];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'pokemon_ability');
    }

    // 全国図鑑での順番情報を管理するリレーションシップ
    public function nationalDexEntries()
    {
        return $this->hasMany(NationalDex::class);
    }

    // キタカミ図鑑での順番情報を管理するリレーションシップ
    public function kitakamiDexEntries()
    {
        return $this->hasMany(KitakamiDex::class);
    }

    // ブルーベリー図鑑での順番情報を管理するリレーションシップ
    public function blueberryDexEntries()
    {
        return $this->hasMany(BlueberryDex::class);
    }

    // パルデア図鑑での順番情報を管理するリレーションシップ
    public function paldeaDexEntries()
    {
        return $this->hasMany(PaldeaDex::class);
    }

    // 全国図鑑での捕獲情報を管理するリレーションシップ
    public function caughtByUsersNational()
    {
        return $this->belongsToMany(User::class, 'national_caught')->withPivot('caught');
    }

    // キタカミ図鑑での捕獲情報を管理するリレーションシップ
    public function caughtByUsersKitakami()
    {
        return $this->belongsToMany(User::class, 'kitakami_caught')->withPivot('caught');
    }

    // ブルーベリー図鑑での捕獲情報を管理するリレーションシップ
    public function caughtByUsersBlueberry()
    {
        return $this->belongsToMany(User::class, 'blueberry_caught')->withPivot('caught');
    }

    // パルデア図鑑での捕獲情報を管理するリレーションシップ
    public function caughtByUsersPaldea()
    {
        return $this->belongsToMany(User::class, 'paldea_caught')->withPivot('caught');
    }
}

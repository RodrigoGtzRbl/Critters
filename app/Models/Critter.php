<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Critter
 *
 * @property $id
 * @property $name
 * @property $species
 * @property $type_1
 * @property $type_2
 * @property $type_3
 * @property $description
 * @property $region
 * @property $user_id
 * @property $encounter_difficulty
 * @property $sound
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Critter extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'species', 'type_1', 'type_2', 'type_3', 'description', 'region', 'user_id', 'encounter_difficulty', 'sound'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}

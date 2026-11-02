<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
    ];

    public function avatar()
    {
        return $this->belongsTo(Avatar::class, 'avatar_id', 'avatar_id');
    }

    public function plants()
    {
        return $this->belongsToMany(Plant::class, 'user_plants', 'user_id', 'plant_id')
            ->withPivot('note')
            ->withTimestamps();
    }
}

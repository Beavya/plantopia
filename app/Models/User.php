<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
    ];

    public function avatar()
    {
        return $this->belongsTo(Avatar::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
    ];

    protected static function booted(): void
    {
        static::creating(function (User $user) {
            $clayPot = Avatar::where('file', 'black-girl.png')->first();
            $user->avatar_id = $clayPot->id;
        });
    }

    public function avatar()
    {
        return $this->belongsTo(Avatar::class);
    }
}

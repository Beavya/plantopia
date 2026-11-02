<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $primaryKey = 'plant_id';

    protected $fillable = [
        'name',
        'description',
        'image',
        'care_light',
        'care_water',
        'care_humidity',
        'care_fertilizer',
        'pet_safe',
        'child_safe',
        'care_level',
        'light_level',
        'size',
        'water_level',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'plant_category', 'plant_id', 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_plants', 'plant_id', 'user_id')
            ->withPivot('note')
            ->withTimestamps();
    }
}

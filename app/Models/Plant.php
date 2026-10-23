<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
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
        return $this->belongsToMany(Category::class, 'plant_category');
    }
}

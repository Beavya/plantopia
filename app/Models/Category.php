<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
    ];

    public function plants()
    {
        return $this->belongsToMany(Plant::class, 'plant_category', 'category_id', 'plant_id');
    }
}

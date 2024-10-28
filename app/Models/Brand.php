<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'image',
        'is_active',
        'slug',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

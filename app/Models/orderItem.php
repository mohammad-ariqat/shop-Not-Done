<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderItem extends Model
{
    protected $gaurded = [];
    protected $fillable = [
        'product_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

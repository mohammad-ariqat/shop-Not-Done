<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $gaurded = ['id' , 'timestamps'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

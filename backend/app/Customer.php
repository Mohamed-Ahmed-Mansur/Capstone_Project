<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address',
    ];

    // You can define relationships, such as orders, if needed
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
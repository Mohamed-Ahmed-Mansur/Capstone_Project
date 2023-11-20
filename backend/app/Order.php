<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'customer_name', 'customer_email', 'customer_phone', 'customer_address',
        'order_status', 'order_date',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
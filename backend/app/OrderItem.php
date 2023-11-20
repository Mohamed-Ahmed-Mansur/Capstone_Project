<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'product_name', 'product_price', 'product_quantity', 'product_subtotal',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
    ];

    public function order()
    {
        return $this->belongsTo(
            Order::class,
            'id',
            'order_id'
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'quantity',
        'name',
        'email',
        'address',
        'total_price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }

    public function items()
    {
        return $this->hasMany(
            OrderItem::class,
            'order_id',
            'id'
        );
    }
}

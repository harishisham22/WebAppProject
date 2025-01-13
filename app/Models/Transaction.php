<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'order_id',
        'payment_method',
        'total_amount',
        'payment_status',
        'transaction_time',
    ];

    public function order()
    {
        return $this->belongsTo(
            Order::class,
            'order_id',
            'id'
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'menu_id',
        'quantity',
        'subtotal',
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }

    public function menu()
    {
        return $this->belongsTo(
            Menu::class,
            'menu_id',
            'id'
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function show($id)
    {
        $order = Order::with('items')->findOrFail($id);
        return view('payment', compact('order'));
    }
}

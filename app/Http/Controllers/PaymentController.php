<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $start = Carbon::now()->floorMicroseconds();

        $request->validate([
            'order_id' => 'required',
            'payment_method' => 'required',
            'total_amount' => 'required',
        ]);

        $transaction = DB::transaction(function () use ($start, $request) {
            $transaction = new Transaction();

            $transaction->order_id = $request->order_id;

            $transaction->payment_method = $request->payment_method;

            $transaction->total_amount = $request->total_amount;

            $end = Carbon::now()->floorMicroseconds();

            $transaction_time = Carbon::parse($end - $start)->toString();

            $transaction->transaction_time = $transaction_time;

            $transaction->save();
        });

        return response()->json([
            'data' => $transaction
        ], 200);

        return view('orders.details', compact('transaction'));
    }
}
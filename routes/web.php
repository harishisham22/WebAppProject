<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

Route::get('/payment', function () {
    return view('payment');
});
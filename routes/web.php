<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('orders', [OrdersController::class, 'index'])->name('get-all-orders');
Route::get('orders/{id}', [OrdersController::class, 'show']);
Route::post('orders', [OrdersController::class, 'store'])->name('post-order');
Route::put('orders/{id}', [OrdersController::class, 'update']);
Route::delete('orders/{id}', [OrdersController::class, 'delete']);

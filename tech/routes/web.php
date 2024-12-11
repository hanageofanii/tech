<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\DataController;
use App\Services\MidtransService;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;

// Default route
Route::get('/', function () {
    return view('index');
});

// Route to handle suggestions (saran)
Route::post('/saran', [SaranController::class, 'store'])->name('saran.store');

// Route to handle form submission (submit)
Route::post('/submit', [DataController::class, 'store'])->name('submit.form');

// Route to get Midtrans token for payment
Route::post('/get-midtrans-token', function (Request $request) {
    $orderDetails = $request->all();
    $snapToken = MidtransService::getPaymentToken($orderDetails);
    return response()->json(['token' => $snapToken]);
})->name('get.midtrans.token');

// Payment success, pending, and failed routes
Route::get('/payment-success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment-pending', [PaymentController::class, 'pending'])->name('payment.pending');
Route::get('/payment-failed', [PaymentController::class, 'failed'])->name('payment.failed');
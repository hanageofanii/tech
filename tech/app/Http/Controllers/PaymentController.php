<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function success()
    {
        // Logika untuk pembayaran sukses
        return view('payments.success');
    }

    public function pending()
    {
        // Logika untuk pembayaran pending
        return view('payments.pending');
    }

    public function failed()
    {
        // Logika untuk pembayaran gagal
        return view('payments.failed');
    }
}

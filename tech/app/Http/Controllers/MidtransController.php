<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class MidtransController extends Controller
{
    public function createSnapToken(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Data Transaksi
        $orderId = 'ORDER-' . time();
        $grossAmount = 100000; // Set nominal transaksi
        $customerDetails = [
            'first_name' => $request->nama,
            'email' => $request->email,
            'phone' => $request->no_hp,
        ];

        // Parameter untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $grossAmount,
            ],
            'customer_details' => $customerDetails,
        ];

        // Generate Snap Token
        $snapToken = Snap::getSnapToken($params);

        return response()->json([
            'snap_token' => $snapToken,
        ]);
    }

    public function notificationHandler(Request $request)
    {
        $notif = new \Midtrans\Notification();

        // Handle berdasarkan status pembayaran
        $transaction = $notif->transaction_status;
        $orderId = $notif->order_id;

        if ($transaction == 'capture') {
            // Pembayaran berhasil
            $status = 'success';
        } else if ($transaction == 'settlement') {
            $status = 'settlement';
        } else if ($transaction == 'pending') {
            $status = 'pending';
        } else if ($transaction == 'deny') {
            $status = 'deny';
        } else if ($transaction == 'expire') {
            $status = 'expired';
        } else if ($transaction == 'cancel') {
            $status = 'canceled';
        }

        // Simpan status transaksi ke database
        $transaksi = Transaksi::where('order_id', $orderId)->first();
        if ($transaksi) {
            $transaksi->status = $status;
            $transaksi->save();
        }

        return response()->json(['status' => $status]);
    }
}

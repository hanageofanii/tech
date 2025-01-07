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
        Config::$clientKey = config('midtrans.client_key');
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = env('MIDTRANS_SANITIZE', true);
        Config::$is3ds = env('MIDTRANS_3DS', true);

        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'total_biaya' => 'required|numeric',
        ]);

        // Data Transaksi
        $orderId = 'ORDER-' . time();
        $grossAmount = $validated['total_biaya']; // Set nominal transaksi from input
        $customerDetails = [
            'first_name' => $validated['nama'],
            'email' => $validated['email'],
            'phone' => $validated['no_hp'],
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
        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json([
                'snap_token' => $snapToken,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to generate Snap token: ' . $e->getMessage()]);
        }
    }

    public function notificationHandler(Request $request)
    {
        $notif = new \Midtrans\Notification();

        // Handle berdasarkan status pembayaran
        $transaction = $notif->transaction_status;
        $orderId = $notif->order_id;

        // Defining status based on transaction status
        $status = 'pending';
        if ($transaction == 'capture' || $transaction == 'settlement') {
            $status = 'success';
        } elseif ($transaction == 'deny') {
            $status = 'deny';
        } elseif ($transaction == 'expire') {
            $status = 'expired';
        } elseif ($transaction == 'cancel') {
            $status = 'canceled';
        }

        // Update transaksi status in database
        $transaksi = Transaksi::where('order_id', $orderId)->first();
        if ($transaksi) {
            $transaksi->status = $status;
            $transaksi->save();
        }

        return response()->json(['status' => $status]);
    }
}

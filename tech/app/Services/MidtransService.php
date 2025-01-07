<?php

namespace App\Services;

use Midtrans\Snap;
use Midtrans\Config;

class MidtransService
{
    public static function getPaymentToken($orderDetails)
    {
        // Configure Midtrans API
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = env('MIDTRANS_SANITIZE', true);
        Config::$is3ds = env('MIDTRANS_3DS', true);

        // Prepare transaction data
        $params = [
            'transaction_details' => [
                'order_id' => $orderDetails['order_id'],
                'gross_amount' => $orderDetails['total_biaya'],
            ],
            'customer_details' => [
                'first_name' => $orderDetails['name'],
                'email' => $orderDetails['email'],
                'phone' => $orderDetails['phone'],
            ],
        ];

        try {
            // Get payment token
            $snapToken = Snap::getSnapToken($params);
            return $snapToken;
        } catch (\Exception $e) {
            // Handle error if token generation fails
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

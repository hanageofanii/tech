<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    // Method to fetch and show the admin panel with visualizations
    public function index()
    {
        return view('admin.panel'); // Return a view that will display the data
    }

    // Method to fetch data for the API
    public function getPanelData()
    {
        $totalBiaya = Transaksi::sum('total_biaya');
        $statusProgress = Transaksi::where('status', 'progress')->count();
        $statusCancel = Transaksi::where('status', 'cancel')->count();
        $statusDone = Transaksi::where('status', 'done')->count();

        // Time series: Total biaya per day for the last 30 days
        $timeSeriesData = Transaksi::selectRaw('DATE(created_at) as date, SUM(total_biaya) as total_biaya')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->limit(30)
            ->get();

        return response()->json([
            'totalBiaya' => $totalBiaya,
            'statusProgress' => $statusProgress,
            'statusCancel' => $statusCancel,
            'statusDone' => $statusDone,
            'timeSeriesData' => $timeSeriesData,
        ]);
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    // Handle form submission and save data
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama' => 'required|string|max:255',
            'saran' => 'required|string|max:1000',
        ]);

        // Create a new Saran entry in the database
        Saran::create([
            'nama' => $request->nama,
            'saran' => $request->saran,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Saran Anda telah berhasil dikirim.');
    }
}

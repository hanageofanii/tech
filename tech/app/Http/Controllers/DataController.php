<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use App\Models\JenisLayanan;
use App\Models\JenisProperti;
use App\Models\User;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'id_jenis_layanan' => 'required|exists:jenis_layanans,id_jenis_layanan',
            'id_jenis_properti' => 'required|exists:jenis_propertis,id_jenis_properti',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:500',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'notes' => 'nullable|string|max:500',
        ]);

        // Cek apakah pelanggan sudah ada berdasarkan email
        $pelanggan = Pelanggan::firstOrCreate(
            ['email' => $validated['email']], // Kondisi pencarian
            [   // Jika tidak ditemukan, buat pelanggan baru dengan data berikut
                'nama' => $validated['nama'],
                'no_hp' => $validated['no_hp'],
                'alamat' => $validated['alamat'],
            ]
        );

        // Simpan data ke tabel `data_layanan_pelanggans`
        $dataLayanan = DB::table('data_layanan_pelanggans')->insertGetId([
            'id_jenis_layanan' => $validated['id_jenis_layanan'],
            'id_jenis_properti' => $validated['id_jenis_properti'],
            'nama' => $pelanggan->nama,
            'email' => $pelanggan->email,
            'no_hp' => $pelanggan->no_hp,
            'alamat' => $pelanggan->alamat,
            'tanggal' => $validated['tanggal'],
            'waktu' => $validated['waktu'],
            'notes' => $validated['notes'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

// Check if there is a teknisi available
$teknisi = Teknisi::first(); 

if (!$teknisi) {
    // Handle the case when there is no teknisi, e.g., set to a default value or handle an error
    return redirect()->back()->with('error', 'No teknisi available!');
}

// Simpan data ke tabel `transaksis`
Transaksi::create([
    'id_teknisi' => $teknisi->id_teknisi,  // Will not be null now
    'id_jenis_layanan' => $validated['id_jenis_layanan'],
    'id_jenis_properti' => $validated['id_jenis_properti'],
    'nama' => $pelanggan->nama,
    'total_biaya' => 0, // You can set this to a calculated value if needed
    'status' => 'progress', // Or set the status as needed
    'id' => Auth::id(), // User ID who is creating this transaction
]);


        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}

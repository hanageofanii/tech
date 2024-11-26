<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // Simpan data ke database
        DB::table('data_layanan_pelanggans')->insert([
            'id_jenis_layanan' => $validated['id_jenis_layanan'],
            'id_jenis_properti' => $validated['id_jenis_properti'],
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
            'tanggal' => $validated['tanggal'],
            'waktu' => $validated['waktu'],
            'notes' => $validated['notes'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}

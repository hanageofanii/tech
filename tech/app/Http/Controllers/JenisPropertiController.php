<?php

namespace App\Http\Controllers; // Ensure this matches your namespace

use App\Models\JenisProperti;

class JenisPropertiController extends Controller
{
    // Correct usage of public method inside a class
    public function index()
    {
        $jenisPropertis = JenisProperti::all();
        return view('jenis_properti', compact('jenisPropertis'));
    }
    
}

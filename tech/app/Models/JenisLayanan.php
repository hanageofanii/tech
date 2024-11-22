<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisLayanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jenis_layanan';

    protected $fillable = [
        'id_jenis_layanan',
        'jenis_layanan',
        'harga',
    ];
    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan');
    }
}

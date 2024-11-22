<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelacakPelanggan extends Model
{
    protected $primaryKey = 'id_pelacak_pelanggan';

    protected $fillable = [
        'id_teknisi',
        'id_jenis_layanan',
        'id_pelanggan',
        'id',
        'total_biaya',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'id_teknisi');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan');
    }
}

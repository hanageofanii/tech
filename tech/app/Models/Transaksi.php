<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'nama', 'id_teknisi', 'id_jenis_layanan', 'id_jenis_properti', 'id', 'total_biaya', 'status'
    ];

     /**
     * Relasi dengan model User
     */
    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'id_teknisi');
    }

    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan');
    }

    public function jenisProperti()
    {
        return $this->belongsTo(JenisProperti::class, 'id_jenis_properti');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

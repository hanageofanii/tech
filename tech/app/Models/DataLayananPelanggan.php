<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLayananPelanggan extends Model
{
    use HasFactory;

    protected $table = 'data_layanan_pelanggans';
    protected $primaryKey = 'id_data'; 
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'id_jenis_layanan',
        'id_jenis_properti',
        'tanggal',
        'waktu',
        'notes',
    ];

    // Relationship to Teknisi
    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'id_teknisi');
    }

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // Relationship to JenisLayanan
    public function jenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan');
    }

    // Relationship to JenisProperti
    public function jenisProperti()
    {
        return $this->belongsTo(JenisProperti::class, 'id_jenis_properti');
    }
}

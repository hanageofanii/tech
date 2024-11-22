<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisProperti extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jenis_properti';

    protected $fillable = [
        'id_jenis_properti',
        'jenis_properti',
    ];

    public function jenisProperti()
    {
        return $this->belongsTo(JenisProperti::class, 'id_jenis_properti');
    }
}

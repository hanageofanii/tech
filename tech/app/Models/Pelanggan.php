<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';

    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
    ];
}

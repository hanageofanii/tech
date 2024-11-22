<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $table = 'sarans'; 

    protected $primaryKey = 'id_saran';

    protected $fillable = [
        'nama',
        'saran',
    ];

    public function saran()
    {
        return $this->belongsTo(Saran::class, 'id_saran');
    }
}

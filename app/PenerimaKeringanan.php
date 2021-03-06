<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaKeringanan extends Model
{
    protected $fillable = [
        'id_keringanan', 'id_siswa', 'status_pnerima', 'berkas_keringanan', 'alasan_keringanan'
    ];

    protected $primaryKey = 'id_penerima_keringanan';
}

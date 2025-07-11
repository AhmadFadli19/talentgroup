<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KolaborasiDetail extends Model
{
    protected $table = 'kolaborasidetail';
    protected $fillable = [
        'kolaborasi_id',
        'judul_kelas',
        'deskripsi',
        'jumlah_materi',
        'materi',
        'persiapan',
    ];

    public function Kolaborasi()
    {
        return $this->belongsTo(Kolaborasi::class, 'kolaborasi_id');
    }
}

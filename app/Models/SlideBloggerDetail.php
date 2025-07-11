<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideBloggerDetail extends Model
{
    protected $table = 'slidebloggerdetail';

    protected $fillable = [
        'slideBlogger_id',
        'judul_kelas',
        'deskripsi',
        'jumlah_materi',
        'materi',
        'persiapan',
    ];

    public function SlideBlogger()
    {
        return $this->belongsTo(SlideBlogger::class, 'slideblogger_id');
    }
}

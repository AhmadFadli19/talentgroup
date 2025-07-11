<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CardDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'judul_kelas',
        'deskripsi',
        'jumlah_materi',
        'materi',
        'persiapan',
    ];

    protected $casts = [
        'jumlah_materi' => 'integer',
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}

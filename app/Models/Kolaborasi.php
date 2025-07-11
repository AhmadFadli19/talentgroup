<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kolaborasi extends Model
{
    protected $table = 'kolaborasi';

    protected $fillable = [
        'title',
        'description',
        'create_view',
        'category',
        'image',
    ];

    public function detail()
    {
        return $this->hasOne(KolaborasiDetail::class, 'kolaborasi_id');
    }
}

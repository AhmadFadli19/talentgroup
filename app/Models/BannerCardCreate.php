<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerCardCreate extends Model
{
    protected $table = 'bannercardcreate';

    protected $fillable = [
        'title',
        'description',
        'create_view',
        'category',
        'image',
    ];

    public function detail()
    {
        return $this->hasOne(BannerCardDetail::class, 'BannerCard_id');
    }
}

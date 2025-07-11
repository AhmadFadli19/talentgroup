<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideBlogger extends Model
{
    protected $table = 'slideblogger';

    protected $fillable = [
        'title',
        'blog_author',
        'description',
        'image',
        'create_view',
        'url',
    ];

    public function detail()
    {
        return $this->hasOne(SlideBloggerDetail::class, 'slideBlogger_id');
    }
}

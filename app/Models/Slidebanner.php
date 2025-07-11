<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slidebanner extends Model
{
    protected $table = 'slidebanner';
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button_text',
        'url',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloqeunt\Model;

class Artist extends Model {
    protected $fillable =[
        'spotify_id',
        'name',
        'image_url',
        'followers',
        'genres',
        'price'
    ];
    protected $casts = [
        'genres' => 'array',
        'price' => 'decimal:2',
    ];
}
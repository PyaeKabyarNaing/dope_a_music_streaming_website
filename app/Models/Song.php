<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'artist_name',
        'ft_artist_id',
        'genre_id',
        'album_id',
        'cover_image',
        'audio_file',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Song extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'artist_name',
        'ft_artist_id',
        'genre_id',
        'album_id',
        'cover_image',
        'audio_file',
        'user_id',
    ];

    // public function album()
    // {
    //     return $this->belongsTo(Album::class);
    // }

    public function albums()
    {
        return $this->belongsToMany(Album::class, 'album_song');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

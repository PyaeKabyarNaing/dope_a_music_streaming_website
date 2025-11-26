<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'artist_name',
        'cover_image',
        'description',
        'release_year',
        'user_id'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

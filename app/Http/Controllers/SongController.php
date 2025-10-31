<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $users = User::all();
        $albums = Album::all();
        $genres = Genre::all();
        return view('users.index', compact('users', 'genres', 'albums'));
    }

    // create song page
    public function create() {
        return view('songs.create');
    }

    // posting new song
    public function store(Request $request) {
        $request->validate([
            "name" => "required",
            "artist_name" => "required",
            "ft_artist_name" => "nullable",
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'audio_file' => 'required|mimes:mp3,wav,ogg|max:10240',
            "genre_id" => "nullable",
            "album_id" => "nullable",
        ]);

        $coverPath = null;
        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('covers', 'public');
        }

        $audioPath = $request->file('audio_file')->store('songs', 'public');

        Song::create([
            'name' => $request->name,
            'artist_name' => $request->artist_name,
            'ft_artist_name' => $request->ft_artist_name,
            'genre_id' => $request->genre_id,
            'album_id' => $request->album_id,
            'cover_image' => $coverPath,
            'file_path' => $audioPath,
            'artist_id' => Auth::id(),
        ]);

        return redirect()->route('songs.create')->with('success', 'Song uploaded successfully!');
    }
}

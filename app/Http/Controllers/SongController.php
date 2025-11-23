<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;

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
        $data = Genre::all();
        $albums = Album::where('artist_id', auth()->id())->get();

        return view('songs.create', [
            'genres' => $data,
            'albums' => $albums,
        ]);
    }

    // posting new song
    // public function store() {
    //     $validator = validator(request()->all(), [
    //         "title" => "required",
    //         "body" => "required",
    //         "category_id" => "required",
    //     ]);

    //     if($validator->fails()) {
    //         return back()->withErrors($validator);
    //     }

    //     $song = new Song;
    //     $song->name = request()->name;
    //     $song->artist_name = request()->artist_name;
    //     $song->ft_artist_name = request()->ft_artist_name ?? null;
    //     $song->cover_image = request()->cover_image ?? null;
    //     $song->audio_file = request()->audio_file;
    //     $song->album_id = request()->album_id ?? null;
    //     $song->user_id = Auth::id();
    //     $song->save();

    //     return redirect()->route('song.create')->with('success', 'Song uploaded successfully!');
    // }


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

        // $coverPath = null;
        // if ($request->hasFile('cover_image')) {
        //     $coverPath = $request->file('cover_image')->store('images', 'public');
        // }

        if ($request->hasFile('cover_image')) {
        $cover = $request->file('cover_image');

        $coverName = uniqid() . '.' . $cover->getClientOriginalExtension();

        // save to storage/app/public/covers
        $cover->storeAs('images', $coverName, 'public');
    }

        // $audioPath = $request->file('audio_file')->store('songs', 'public');

        if ($request->hasFile('audio_file')) {
        $audio = $request->file('audio_file');

        // create random file name + keep extension
        $audioName = uniqid() . '.' . $audio->getClientOriginalExtension();

        // save to storage/app/public/songs
        $audio->storeAs('songs', $audioName, 'public');
    }

        Song::create([
            'name' => $request->name,
            'artist_name' => $request->artist_name,
            'ft_artist_name' => $request->ft_artist_name,
            'genre_id' => $request->genre_id,
            'album_id' => $request->album_id,
            'cover_image' => isset($coverName) ? ('images/' . $coverName) : null,
            'audio_file' => 'songs/' . $audioName,
        ]);

        return redirect()->route('song.create')->with('success', 'Song uploaded successfully!');
    }
}

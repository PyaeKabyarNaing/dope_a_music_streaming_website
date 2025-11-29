<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function show(Song $song)
    {
        // $song = Song::with('user', 'comments.user')->findOrFail($song->id);
        $song->load('user', 'comments.user');

        return view('songs.detail', [
        'song' => $song,
        'user' => $song->user,
    ]);
    }

    public function index()
    {
        $users = User::all();
        $songs = Song::orderBy('created_at', 'desc')->get();
        $albums = Album::all();
        $genres = Genre::all();
        $artists = User::role('artist')->get();
        return view('users.index', compact('users', 'genres', 'songs', 'albums', 'artists'));
    }

    // create song page
    public function create() {
        $genres = Genre::all();
        $albums = Album::where('user_id', auth()->id())->get();

        return view('songs.create', [
            'genres' => $genres,
            'albums' => $albums,
        ]);
    }

    public function edit(Song $song) {
        $genres = Genre::all();
        $albums = Album::where('user_id', auth()->id())->get();

        return view('songs.edit', compact('song', 'genres', 'albums'));
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required",
            "artist_name" => "required",
            "ft_artist_name" => "nullable",
            "cover_image" => "nullable|image|mimes:jpeg,png,jpg|max:2048",
            "audio_file" => "required|mimes:mp3,wav,ogg|max:10240",
            "genre_id" => "required",
            "album_id" => "nullable",
        ]);

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
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('song.create')->with('success', 'Song uploaded successfully!');
    }

    public function update(Request $request, $id)
{ $song = Song::findOrFail($id);
    $request->validate([
        "name" => "required",
        "artist_name" => "required",
        "ft_artist_name" => "nullable",
        "cover_image" => "nullable|image|mimes:jpeg,png,jpg|max:2048",
        "audio_file" => "nullable|mimes:mp3,wav,ogg|max:10240",
        "genre_id" => "required",
        "album_id" => "nullable",
    ]);

    // COVER IMAGE
    if ($request->hasFile('cover_image')) {
        if ($song->cover_image && Storage::disk('public')->exists($song->cover_image)) {
            Storage::disk('public')->delete($song->cover_image);
        }
        $cover = $request->file('cover_image');
        $coverName = uniqid().'.'.$cover->getClientOriginalExtension();
        $cover->storeAs('images', $coverName, 'public');
        $song->cover_image = 'images/'.$coverName;
    }

    // AUDIO FILE
    if ($request->hasFile('audio_file')) {
        if ($song->audio_file && Storage::disk('public')->exists($song->audio_file)) {
            Storage::disk('public')->delete($song->audio_file);
        }
        $audio = $request->file('audio_file');
        $audioName = uniqid().'.'.$audio->getClientOriginalExtension();
        $audio->storeAs('songs', $audioName, 'public');
        $song->audio_file = 'songs/'.$audioName;
    }

    // TEXT FIELDS
    $song->name = $request->name;
    $song->artist_name = $request->artist_name;
    $song->ft_artist_name = $request->ft_artist_name;
    $song->genre_id = $request->genre_id;
    $song->album_id = $request->album_id;

    // KEEP EXISTING USER
    // do NOT change $song->user_id

    $song->save();

    return back()->with('success', 'Song updated successfully!');
}

}

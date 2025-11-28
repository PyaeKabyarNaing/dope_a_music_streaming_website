<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use App\Models\Comment as UserComment;
use Dom\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function show(Album $album)
    {
        $album = Album::with('songs', 'user', 'songs.comments.user')->findOrFail($album->id);

        return view('albums.show', [
        'album' => $album,
        'songs' => $album->songs,
        'user' => $album->user,
    ]);
    }

    // Show create album form
    public function create()
    {
        return view('albums.create');
    }

    // Store new album
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'artist_name' => 'required',
            'cover_image' => 'required',
            'description' => 'nullable',
            'release_year' => 'nullable',
        ]);

        if ($request->hasFile('cover_image')) {
        $cover = $request->file('cover_image');

        $coverName = uniqid() . '.' . $cover->getClientOriginalExtension();

        // save to storage/app/public/covers
        $cover->storeAs('images', $coverName, 'public');
    }

        Album::create([
            'name' => $request->name,
            'artist_name' => $request->artist_name,
            'cover_image' => 'images/' . $coverName,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('album.create')
            ->with('success', 'Album created successfully!');
    }

    // Optional: List all albums for logged-in user
    // public function index()
    // {
    //     $albums = Album::where('user_id', Auth::id())->get();

    //     return view('albums.index', compact('albums'));
    // }
}

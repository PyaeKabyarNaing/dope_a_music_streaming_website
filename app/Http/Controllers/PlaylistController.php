<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    if ($user->can('create playlists')) {
        // The user can create playlists
    } else {
        // The user can't create playlists
    }
    public function index()
    {
        return view('playlists.index');
    }

    public function create()
    {
        return view('playlists.index');
    }
}

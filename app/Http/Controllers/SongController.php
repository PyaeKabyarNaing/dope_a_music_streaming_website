<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\Album;

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
}

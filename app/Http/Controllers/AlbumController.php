<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    if ($user->can('create albums')) {
        public function index()
        {
            return view('albums.index');
        }
        public function create()
        {
            return view('albums.index');
        }
    };
}

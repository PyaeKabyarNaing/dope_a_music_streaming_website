<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('users.index');
// })->name('home');

Route::get('/', [SongController::class, 'index'])->name('home');

Route::get('/album', [AlbumController::class, 'index'])->name('album.index');
// Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');

// Route::get('/album/create', function () {
//     return view('albums.create');
// })->name('album.create');

Route::get('/detail', function () {
    return view('songs.detail');
})->name('song.detail'); // replace with dynamic route by song_id

Route::get('/playlist', function () {
    return view('songs.playlist');
})->name('playlist.edit');

Route::get('/history', function () {
    return view('songs.history');
})->name('history.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// artist
Route::middleware(['auth', 'role:artist'])->group(function () {
    Route::get('/song/upload', [SongController::class, 'create'])->name('song.create');
    Route::post('/song', [SongController::class, 'store'])->name('song.store');
    
    Route::get('/album/upload', [AlbumController::class, 'create'])->name('album.create');
    Route::post('/album', [AlbumController::class, 'store'])->name('album.store');
});

Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'view'])->name('user.profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin

// Route::get('/admins', function () {
//     return view('admins.index');
// })->name('admin');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [UserController::class, 'index'])->name('admins.index');
    Route::post('/admin/{user}/role', [UserController::class, 'updateRoles'])->name('admins.updateRoles');
});

require __DIR__.'/auth.php';

// example spatie use in web.php
Route::get('/admin/user/create', function () {
    return view('admin.create-user');
})->middleware(['auth', 'verified', 'can:create user'])->name('user.create');

Route::get('/background', function () {
    return view('components.background');
})->name('background');

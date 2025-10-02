<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('songs.index');
})->name('home');

Route::get('/detail', function () {
    return view('songs.detail');
})->name('detail'); // replace with dynamic route by song_id

Route::get('/playlist', function () {
    return view('songs.playlist');
})->name('playlist.edit');

Route::get('/history', function () {
    return view('songs.history');
})->name('history.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin
Route::get('/admin', function () {
    return view('admins.index');
})->name('admin');

require __DIR__.'/auth.php';

// example spatie use in web.php
Route::get('/admin/user/create', function () {
    return view('admin.create-user');
})->middleware(['auth', 'verified', 'can:create user'])->name('user.create');

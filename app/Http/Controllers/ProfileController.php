<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Song;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function view($id)
    {
        $artist = User::findOrFail($id);
        $songs = Song::where('user_id', $id)->get();
        $albums = Album::where('user_id', $id)->get();
        return view('users.profile', compact('artist', 'songs', 'albums'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        $user = $request->user();

        $user->fill($request->validated());

        // Handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        // Store new image
        $path = $request->file('image')->store('profile-images', 'public');
        $user->image = $path;
    }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

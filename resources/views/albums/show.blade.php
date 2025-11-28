<x-app-layout>
    {{-- @include('layouts.audiobar') --}}
    <!-- listbar -->
    @include('layouts.listbar')

    <!-- Album Name Header -->
    <h1 class="text-2xl font-bold mb-6">
        {{ $album->name }}
    </h1>

    <!-- Song Cover Image -->
    <div class="w-full flex justify-center mb-6">
        @if ($album->cover_image)
            <img src="{{ asset('storage/' . $album->cover_image) }}" alt="{{ $album->name }}"
                class="w-64 h-64 object-cover rounded-xl shadow-lg">
        @else
            <div class="w-64 h-64 object-cover rounded-xl shadow-lg bg-slate-400"></div>
        @endif
    </div>

    <!-- Uploader Info + Actions -->
    <div class="flex items-center justify-between mb-6">

        <!-- Left: Uploader avatar + name + subscribers -->
        <div class="flex items-center gap-3">
            <!-- Avatar -->
            @if ($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" class="w-12 h-12 rounded-full object-cover" />
            @else
                <div
                    class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
            @endif

            <!-- Name and subscriptions -->
            <div>
                <p class="text-lg font-semibold">{{ $user->name }}</p>
                <p class="text-sm text-gray-500">100 K subscribers</p>
            </div>
        </div>

        <!-- Right: Buttons - React, Share, Download -->
        <div class="flex items-center gap-4 text-xl">

            <!-- React -->
            <button class="hover:text-blue-500 transition">
                <x-icons.heart-icon />
            </button>

            <!-- Share -->
            <button class="hover:text-blue-500 transition">
                <x-icons.share-icon />
            </button>

            <!-- Download -->
            {{-- <a href="{{ route('song.download', $song->id) }}" class="hover:text-blue-500 transition"> --}}
            <a href="#" class="hover:text-blue-500 transition">
                <x-icons.download-icon />
            </a>
        </div>
    </div>

    <!-- Divider -->
    <hr class="my-4 border-gray-300">

    <!-- Comment Section -->
    <div class="h-64 overflow-y-auto pr-2">

        {{-- @foreach ($album->songs as $song) --}}
        <!-- Add Comment -->
        <form action="{{ route('comment.store') }}" method="POST" class="mb-4">
            @csrf
            <textarea name="content" rows="2" class="w-full p-2 border rounded-md focus:ring focus:ring-purple-300 text-black"
                placeholder="Add a comment..."></textarea>
            <input type="hidden" name="song_id" value="{{ $song->id }}">

            <x-secondary-button>Comment</x-secondary-button>
        </form>

        <!-- Display Comments -->
        @foreach ($album->songs as $song)
            <div class="mb-4 pb-2 border-b border-gray-200">
                @foreach ($song->comments as $comment)
                    <p class="font-semibold">{{ $comment->user->name }}</p>
                    <p class="text-gray-700">{{ $comment->content }}</p>
                    <p class="text-xs text-gray-400">{{ $comment->created_at->diffForHumans() }}</p>
                @endforeach
            </div>
        @endforeach

    </div>

    <script>
        window.albumData = {
            songs: @json($songs),
            album: @json($album),
            albumCover: "{{ $album->cover_image ? asset('storage/' . $album->cover_image) : asset('images/default-cover.jpg') }}"
        };

        document.addEventListener("DOMContentLoaded", () => {
            if (window.albumData.songs && window.albumData.songs.length > 0) {
                // Load all songs into the player
                player.loadSongs(window.albumData.songs);

                // Set cover
                const audioCover = document.getElementById('audio-cover');
                if (audioCover) {
                    audioCover.src = window.albumData.albumCover;
                }
            }
        });
    </script>

</x-app-layout>

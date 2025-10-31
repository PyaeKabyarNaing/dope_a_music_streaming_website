<x-app-layout>
<div class="max-w-2xl mx-auto p-6 rounded-2xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">🎵 Upload a New Song</h2>

    @if (session('success'))
        <div class="mb-4 p-3 text-green-800 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('song.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- Title -->
        <div>
            <label class="block font-medium mb-1">Song Title</label>
            <input type="text" name="title" value="{{ old('title') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Genre -->
        <div>
            <label class="block font-medium mb-1">Genre</label>
            <input type="text" name="genre" value="{{ old('genre') }}"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            @error('genre') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Cover Image -->
        <div>
            <label class="block font-medium mb-1">Cover Image (optional)</label>
            <input type="file" name="cover_image" accept="image/*"
                   class="w-full border border-gray-300 rounded-lg p-2">
            @error('cover_image') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Audio File -->
        <div>
            <label class="block font-medium mb-1">Audio File</label>
            <input type="file" name="audio_file" accept="audio/*"
                   class="w-full border border-gray-300 rounded-lg p-2" required>
            @error('audio_file') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Submit -->
        <div class="text-center">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Upload Song
            </button>
        </div>
    </form>
</div>
</x-app-layout>
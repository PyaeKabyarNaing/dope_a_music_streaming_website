<x-app-layout>

    @if (session()->has('success'))
        <div id="flash-message" class="w-full bg-green-500 text-white p-4 mb-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <script>
        const flash = document.getElementById('flash-message');

        if (flash) {
            setTimeout(() => {
                flash.style.transition = "opacity 0.5s";
                flash.style.opacity = "0";

                setTimeout(() => flash.remove(), 500);
            }, 3000);
        }
    </script>

    <div class="max-w-2xl mx-auto p-6 rounded-2xl shadow-md mt-10">
        <header class="text-center text-2xl font-bold">
            Upload Song
        </header>

        <form method="POST" action="{{ route('song.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf

            <!-- Song Name -->
            <div>
                <x-input-label for="name" :value="__('Song Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                    value="{{ old('name') }}" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Artist Name -->
            <div>
                <x-input-label for="artist_name" :value="__('Artist Name')" />
                <x-text-input id="artist_name" name="artist_name" type="text" class="mt-1 block w-full"
                    value="{{ old('artist_name') }}" required />
                <x-input-error :messages="$errors->get('artist_name')" class="mt-2" />
            </div>

            <!-- Ft Artist Name -->
            <div>
                <x-input-label for="ft_artist_name" :value="__('Featuring Artist Name')" />
                <x-text-input id="ft_artist_name" name="ft_artist_name" type="text" class="mt-1 block w-full"
                    value="{{ old('ft_artist_name') }}" />
            </div>

            <!-- Genre -->
            <div>
                <x-input-label for="genre_id" :value="__('Genre')" />
                <select id="genre_id" name="genre_id"
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    <option value="" disabled selected>Select a genre</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('genre_id')" class="mt-2" />
            </div>

            <!-- Cover Image -->
            <div>
                <x-input-label for="cover_image" :value="__('Cover Image (Optional)')" />
                <input id="cover_image" name="cover_image" type="file" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-900 dark:text-gray-100
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-md file:border-0
                       file:text-sm file:font-semibold
                       file:bg-gray-100 file:text-gray-700
                       hover:file:bg-gray-200
                       dark:file:bg-gray-700 dark:file:text-gray-300" />
                <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />
            </div>

            <!-- Audio File -->
            <div>
                <x-input-label for="audio_file" :value="__('Audio File (MP3, WAV)')" />
                <input id="audio_file" name="audio_file" type="file" accept="audio/*" required
                    class="mt-1 block w-full text-sm text-gray-900 dark:text-gray-100
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-md file:border-0
                       file:text-sm file:font-semibold
                       file:bg-gray-100 file:text-gray-700
                       hover:file:bg-gray-200
                       dark:file:bg-gray-700 dark:file:text-gray-300" />
                <x-input-error :messages="$errors->get('audio_file')" class="mt-2" />
            </div>

            <!-- Album -->
            <div>
                <x-input-label for="album_id" :value="__('Album (Optional)')" />
                <select id="album_id" name="album_id"
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    <option value="">No album</option>

                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}" {{ old('album_id') == $album->id ? 'selected' : '' }}>
                            {{ $album->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('album_id')" class="mt-2" />
            </div>

            <!-- Submit -->
            <div class="flex items-center gap-4">
                <x-primary-button class="w-full  justify-center">
                    {{ __('Upload') }}
                </x-primary-button>

                @if (session('status') === 'song-uploaded')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Uploaded.') }}
                    </p>
                @endif
            </div>
        </form>

        {{-- <h2 class="text-2xl font-bold mb-6 text-center">Upload a New Song</h2>

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
            <input type="text" name="name" value="{{ old('name') }}"
                   class="dark:text-black w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Artist Name -->
        <div>
            <label class="block font-medium mb-1">Artist Name</label>
            <input type="text" name="artist_name" value="{{ old('artist_name') }}"
                   class="dark:text-black w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Ft Artist Name -->
        <div>
            <label class="block font-medium mb-1">Featuring Artist Name</label>
            <input type="text" name="ft_artist_name" value="{{ old('ft_artist_name') }}"
                   class="dark:text-black w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <!-- Genre -->
        <select name="genre_id" class="form-select mb-2 dark:text-black">
            @foreach ($genres as $genre)
            <option value="{{ $genre->id}}">{{ $genre->name}}</option>
                
            @endforeach
        </select> --}}

        <!-- Genre old -->
        {{-- <div>
            <label class="block font-medium mb-1">Genre</label>
            <input type="text" name="genre" value="{{ old('genre') }}"
                   class="dark:text-black w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            @error('genre') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div> --}}

        <!-- Cover Image -->
        {{-- <div>
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
                class="w-full px-6 py-2 bg-purple text-white rounded-lg hover:bg-purple-700 transition">
                Upload Song
            </button>
        </div>
    </form> --}}
    </div>
</x-app-layout>

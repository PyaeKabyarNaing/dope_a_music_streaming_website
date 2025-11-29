<x-app-layout>
    <div class="max-w-2xl mx-auto p-6 rounded-2xl shadow-md mt-10">
        <header class="text-center text-2xl font-bold">
            Edit Album
        </header>

        <form method="POST" action="{{ route('album.update', $album->id) }}" class="mt-6 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Album Name -->
            <div>
                <x-input-label for="name" :value="__('Album Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                    value="{{ old('name', $album->name) }}" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Artist Name -->
            <div>
                <x-input-label for="artist_name" :value="__('Artist Name')" />
                <x-text-input id="artist_name" name="artist_name" type="text" class="mt-1 block w-full"
                    value="{{ old('artist_name', $album->artist_name) }}" required />
                <x-input-error :messages="$errors->get('artist_name')" class="mt-2" />
            </div>

            <!-- Description -->
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"
                    value="{{ old('description', $album->description) }}" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Cover Image -->
            <div>
                <x-input-label for="cover_image" :value="__('Cover Image')" />
                <div class="mb-2">
                    @if ($album->cover_image)
                        <img src="{{ asset('storage/' . $album->cover_image) }}" alt="Cover"
                            class="w-32 h-32 object-cover rounded">
                    @endif
                </div>
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

            <!-- Add Songs -->
            <!-- Add Songs with Checkboxes -->
            <div>
                <x-input-label value="Add/Remove Songs from Album" />
                <div
                    class="mt-2 max-h-60 overflow-y-auto border border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-900">
                    @foreach ($allSongs as $song)
                        <label class="flex items-center space-x-3 p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded">
                            <input type="checkbox" name="songs[]" value="{{ $song->id }}"
                                @if ($album->songs->contains($song->id)) checked @endif
                                class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-black dark:text-white">{{ $song->name }}</span>
                        </label>
                    @endforeach
                </div>
                <p class="text-sm text-gray-500 mt-1">Check songs to add to album, uncheck to remove</p>
            </div>

            <!-- Submit -->
            <div class="flex items-center gap-4">
                <x-primary-button class="w-full justify-center">
                    {{ __('Update') }}
                </x-primary-button>

                @if (session('success'))
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">
                        {{ session('success') }}
                    </p>
                @endif
            </div>
        </form>
        <!-- Songs in Album -->
        <div>
            <x-input-label value="Songs in this Album" />
            @foreach ($album->songs as $song)
                <div class="flex justify-between items-center bg-gray-100 p-2 rounded-lg mt-2 text-black">
                    <span class="text-black">{{ $song->name }}</span>
                    <form method="post"
                        action="{{ route('album.removeSong', ['album' => $album->id, 'song' => $song->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

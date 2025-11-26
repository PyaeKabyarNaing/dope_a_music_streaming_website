<x-app-layout>
    <div class="max-w-2xl mx-auto p-6 rounded-2xl shadow-md mt-10">
        <header class="text-center text-2xl font-bold">
            Add Album
        </header>

        <form method="POST" action="{{ route('album.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf

            <!-- Album Name -->
            <div>
                <x-input-label for="name" :value="__('Album Name')" />
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

            <!-- Desc -->
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"
                    value="{{ old('description') }}" required />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Cover Image -->
            <div>
                <x-input-label for="cover_image" :value="__('Cover Image')" />
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
    </div>
</x-app-layout>

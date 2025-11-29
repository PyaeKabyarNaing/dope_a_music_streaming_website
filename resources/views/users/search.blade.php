<x-app-layout>
    <div class="pt-16"> <!-- Add padding to account for fixed nav -->
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4">Search Results</h1>

            @if ($searchSongs->count() > 0)
                <p class="mb-4">Found {{ $searchSongs->count() }} results for "{{ request('search') }}"</p>
                <ul class="space-y-2">
                    @foreach ($searchSongs as $song)
                        <a href="{{ route('song.show', $song) }}">
                            <li class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow">
                                <div class="flex items-center">
                                    @if ($song->cover_image)
                                        <img src="{{ asset('storage/' . $song->cover_image) }}"
                                            alt="{{ $song->cover_name }}" class="w-12 h-12 rounded-md mr-4 object-cover">
                                    @endif
                                    <div>
                                        <h3 class="font-semibold">{{ $song->name }}</h3>
                                        @if ($song->artist_name)
                                            <p class="text-gray-600 dark:text-gray-400">{{ $song->artist_name }}</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500">No songs found for "{{ request('search') }}"</p>
                    <a href="{{ route('home') }}" class="text-purple-500 hover:text-purple-600 mt-2 inline-block">
                        Return to home
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

<x-app-layout>

    <!-- Header -->
    <header class="">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">My Space</h1>
    </header>

    <!-- Profile Header -->
    <div class="p-6 flex items-center justify-between mt-4">

        <!-- LEFT SIDE -->
        <div class="flex items-center space-x-6">
            @if (auth()->user()->image)
                <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Image"
                    class="w-24 h-24 rounded-full object-cover">
            @else
                <div class="w-20 h-20 bg-blue-400 rounded-full flex items-center justify-center text-3xl font-bold">
                    {{ strtoupper(auth()->user()->name[0]) }}
                </div>
            @endif

            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                    {{ auth()->user()->name }}
                </h2>

                <p class="text-purple-500 dark:text-purple-500">
                    {{ strtoupper(auth()->user()->getRoleNames()->first()) }}

                </p>
            </div>
        </div>

        <!-- RIGHT SIDE BUTTON -->
        <a href="{{ route('profile.edit') }}">
            <x-primary-button>
                Edit Account Info
            </x-primary-button>
        </a>
    </div>


    <!-- Tabs -->
    <div class="mt-6 bg-white dark:bg-gray-800 shadow">
        <ul class="flex border-b border-gray-200 dark:border-gray-700">
            <li class="-mb-px mr-1">
                <a class="bg-white dark:bg-gray-800 inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                    href="#">Songs</a>
            </li>
            <li class="mr-1">
                <a class="bg-white dark:bg-gray-800 inline-block py-2 px-4 text-gray-500 hover:text-blue-700 font-semibold"
                    href="#">Albums</a>
            </li>
            <li class="mr-1">
                <a class="bg-white dark:bg-gray-800 inline-block py-2 px-4 text-gray-500 hover:text-blue-700 font-semibold"
                    href="#">Playlists</a>
            </li>
        </ul>
    </div>

    <!-- Tab content -->
    <div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example Songs -->
        <h1 class="text-2xl font-bold mb-4">{{ $artist->name }}'s Songs</h1>

        @foreach ($songs as $index => $song)
            <div class="flex items-center gap-3 p-2 hover:bg-gray-100 dark:hover:bg-gray-800 
                rounded cursor-pointer song-item"
                data-index="{{ $index }}">

                <!-- Song Cover -->
                @if ($song->cover_image)
                    <img src="{{ asset('storage/' . $song->cover_image) }}" alt="{{ $song->name }}"
                        class="w-10 h-10 object-cover rounded-md" />
                @else
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 object-cover rounded-md" />
                @endif

                <!-- Song Info -->
                <div class="flex flex-col">
                    <span class="font-semibold text-sm text-gray-900 dark:text-white">
                        {{ $song->name }}
                    </span>

                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $artist->name }}
                    </span>
                </div>

            </div>
        @endforeach


        <!-- Example Albums -->
        <div class="bg-white dark:bg-gray-700 shadow rounded p-4">
            <img src="https://via.placeholder.com/200" alt="Album Cover" class="rounded mb-2 w-full h-40 object-cover">
            <h3 class="font-bold text-gray-800 dark:text-white">Album 1</h3>
            <p class="text-gray-500 dark:text-gray-300">John Doe</p>
        </div>
    </div>
</x-app-layout>

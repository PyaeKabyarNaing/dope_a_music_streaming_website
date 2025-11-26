<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot> --}}

    <!-- Header -->
    <header class="">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">My Space</h1>
    </header>

    <!-- Profile Header -->
    <div class="p-6 flex items-center space-x-6 mt-6">
        @if (auth()->user()->image)
            <img src="{{ auth()->user()->image }}" alt="Profile Image" class="w-24 h-24 rounded-full object-cover">
        @else
            <div class="w-20 h-20 bg-blue-400 rounded-full flex items-center justify-center text-3xl font-bold">
                {{ strtoupper(auth()->user()->name[0]) }}
            </div>
        @endif

        <div>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                {{ auth()->user()->name }}
            </h2>
            <p class="text-gray-500 dark:text-gray-300">{{ strtolower(auth()->user()->name) }}</p>
            <a href="{{ route('profile.edit') }}">
                <x-primary-button>Edit Page</x-primary-button>
            </a>
        </div>
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
        <div class="bg-white dark:bg-gray-700 shadow rounded p-4">
            <img src="https://via.placeholder.com/200" alt="Song Cover" class="rounded mb-2 w-full h-40 object-cover">
            <h3 class="font-bold text-gray-800 dark:text-white">Song 1</h3>
            <p class="text-gray-500 dark:text-gray-300">Artist: John Doe</p>
        </div>

        <div class="bg-white dark:bg-gray-700 shadow rounded p-4">
            <img src="https://via.placeholder.com/200" alt="Song Cover" class="rounded mb-2 w-full h-40 object-cover">
            <h3 class="font-bold text-gray-800 dark:text-white">Song 2</h3>
            <p class="text-gray-500 dark:text-gray-300">Artist: John Doe</p>
        </div>

        <!-- Example Albums -->
        <div class="bg-white dark:bg-gray-700 shadow rounded p-4">
            <img src="https://via.placeholder.com/200" alt="Album Cover" class="rounded mb-2 w-full h-40 object-cover">
            <h3 class="font-bold text-gray-800 dark:text-white">Album 1</h3>
            <p class="text-gray-500 dark:text-gray-300">John Doe</p>
        </div>

        <div class="bg-white dark:bg-gray-700 shadow rounded p-4">
            <img src="https://via.placeholder.com/200" alt="Album Cover" class="rounded mb-2 w-full h-40 object-cover">
            <h3 class="font-bold text-gray-800 dark:text-white">Album 2</h3>
            <p class="text-gray-500 dark:text-gray-300">John Doe</p>
        </div>
    </div>
</x-app-layout>

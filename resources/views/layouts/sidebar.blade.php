<!-- resources/views/layouts/sidebar.blade.php -->
<!-- whole sidebar -->
<div
    class="fixed dark:bg-black bg-white inset-y-0 left-0 w-[20%] h-full pr-2 flex-col hidden lg:block transform transition-transform duration-300 ease-in-out z-10 pl-7 border-r-4 border-gray-500">

    {{-- <x-application-logo/> --}}

    <div class="h-[10%]"></div>

    <div class="h-[20%] flex flex-col">

        <!-- Sidebar Links -->
        <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
            <div>
                <x-icons.home-icon class="r-0" />
            </div>
            <div>
                <a href="{{ route('home') }}" class="text-sm font-medium l-0">Home</a>
            </div>
        </nav>

        <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
            <div>
                <x-icons.playlist-icon class="r-0" />
            </div>
            <div>
                <a href="{{ route('playlist.edit') }}" class="text-sm font-medium l-0">Playlists</a>
            </div>
        </nav>

        <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
            <div>
                <x-icons.history-icon class="r-0" />
            </div>
            <div>
                <a href="{{ route('history.view') }}" class="text-sm font-medium l-0">History</a>
            </div>
        </nav>

        @role('artist')
            <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
                <div>
                    <x-icons.album-icon class="r-0" />
                </div>
                <div>
                    <a href="{{ route('album.create') }}" class="text-sm font-medium l-0">Create New ALbum</a>
                </div>
            </nav>

            <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
                <div>
                    <x-icons.music-icon class="r-0" />
                </div>
                <div>
                    <a href="{{ route('song.create') }}" class="text-sm font-medium l-0">Add New Song</a>
                </div>
            </nav>
        @endrole

        <form method="POST" action="{{ route('logout') }}" class="hover:bg-red-300">
            @csrf
            <button type="submit" class="flex items-center py-2 gap-3 cursor-pointer text-red-500">
                <div>
                    <x-icons.logout-icon class="r-0" />
                </div>
                <div>
                    <span class="text-base font-bold l-0">Logout</span>
                </div>
            </button>
        </form>
    </div>
</div>

<!-- resources/views/layouts/sidebar.blade.php -->
<!-- whole sidebar -->
<div class="fixed dark:bg-black bg-white inset-y-0 left-0 w-[20%] h-full pr-2 flex-col hidden lg:block transform transition-transform duration-300 ease-in-out z-10 pl-7 border-r-4 border-gray-500">

{{-- <x-application-logo/> --}}

    <div class="h-[10%]"></div>

     <div class="h-[20%] flex flex-col">

    <!-- Sidebar Links -->
    <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
    <div>
        <x-home-icon class="r-0"/>
    </div>
    <div>
        <a href="{{ route('home') }}" class="text-sm font-medium l-0">Home</a>
    </div>
    </nav>

    <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
        <div>
            <x-playlist-icon class="r-0"/>
        </div>
        <div>
            <a href="{{ route('playlist.edit') }}" class="text-sm font-medium l-0">Playlists</a>
        </div>
    </nav>

    <nav class="flex items-center py-2 gap-3 cursor-pointer hover:bg-gray-700 transition">
        <div>
            <x-history-icon class="r-0"/>
        </div>
        <div>
            <a href="{{ route('history.view') }}" class="text-sm font-medium l-0">History</a>
        </div>
    </nav>

<form method="POST" action="{{ route('logout') }}" class="hover:bg-red-300">
    @csrf
    <button type="submit" class="flex items-center py-2 gap-3 cursor-pointer text-red-500">       
        <div>
            <x-logout-icon class="r-0"/>
        </div>
        <div>
            <span class="text-base font-bold l-0">Logout</span>
        </div>
    </button>
</form>
    </div>

    <div class="h-[30%] rounded mt-3">
        <h1 class="text-lg"><b>Subscriptions</b></h1>
        <div class="overflow-auto">
        <div class="pt-4 flex items-center justify-between">
            <nav class="flex items-center gap-3">
                <div class="w-[30px] h-[30px] rounded-full overflow-hidden">
                <img class="rounded-full w-[30px] h-auto" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                <a href="{{ route('logout') }}" class="text-sm">Artist Name</a>
            </nav>
        </div>
        <div class="pt-4 flex items-center justify-between">
            <nav class="flex items-center gap-3">
                <div class="w-[30px] h-[30px] rounded-full overflow-hidden">
                <img class="rounded-full w-[30px] h-auto" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                <a href="{{ route('logout') }}" class="text-sm">Artist Name</a>
            </nav>
        </div>
        <div class="pt-4 flex items-center justify-between">
            <a href="{{ route('logout') }}" class="flex items-center gap-3">
                <div class="w-[30px] h-[30px] rounded-full overflow-hidden">
                <img class="rounded-full w-[30px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                <span class="text-sm">Artist Name</span>
            </a>
        </div>
        </div>

        {{-- <div class="mr-4 mt-10 pt-4 bg-[#242424] rounded flex flex-col items-start justify-start gap-1 box-content">
            <h1>Create your first playlist</h1>
            <p>It's easy we'll help you</p>

            <button class="px-4 py-1.5 bg-white text-[15px] text-black rounded-full mt-4 mb-3">Create Playlist</button>
        </div> --}}
    </div>
</div>

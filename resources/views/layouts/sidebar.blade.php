<!-- resources/views/layouts/sidebar.blade.php -->
<!-- whole sidebar -->
<div x-data="{ open: false }" 
     class="absolute bg-black inset-y-0 left-0 w-[20%] h-full pr-2 flex-col gap-2 text-white hidden lg:flex transform transition-transform duration-300 ease-in-out z-20 pl-7 border-r-4 border-gray-500">

     <div class="h-[25%] rounded flex flex-col justify-around gap-2">

    <!-- Logo -->
    <div class="h-16 flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo class="h-9 w-auto"/>
        </a>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex items-center gap-3 cursor-pointer">
        <x-home-icon/>
        <a href="{{ route('home') }}">Home</a>
    </nav>

    <nav class="flex items-center gap-3 cursor-pointer">
        <x-home-icon class="h-9 w-auto"/>
        <a href="{{ route('profile.edit') }}">Profile</a>
    </nav>

    <nav class="flex items-center gap-3 cursor-pointer">
        <x-home-icon class="h-9 w-auto"/>
        <a href="{{ route('logout') }}">Logout</a>
    </nav>
    </div>

    <div class="h-[85%] rounded mt-3">
        <h1 class="text-xl"><b>Subscriptions</b></h1>
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
            <nav class="flex items-center gap-3">
                <div class="w-[30px] h-[30px] rounded-full overflow-hidden">
                <img class="rounded-full w-[30px] h-auto" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                <a href="{{ route('logout') }}" class="text-sm">Artist Name</a>
            </nav>
        </div>

        <div class="mr-4 mt-10 pt-4 bg-[#242424] rounded flex flex-col items-start justify-start gap-1">
            <h1>Create your first playlist</h1>
            <p>It's easy we'll help you</p>
            <button class="px-4 py-1.5 bg-white text-[15px] text-black rounded-full mt-4 mb-3">Create Playlist</button>
        </div>
    </div>
</div>

<!-- resources/views/layouts/sidebar.blade.php -->
<!-- whole sidebar -->
<div x-data="{ open: false }" 
     class="absolute bg-black inset-y-0 left-0 w-[25%] h-full pr-2 flex-col gap-2 text-white hidden lg:flex transform transition-transform duration-300 ease-in-out z-20">
     <div class="h-[15%] rounded flex flex-col justify-around">

    <!-- Logo -->
    <div class="h-16 flex items-center pl-8">
        <a href="{{ route('home') }}">
            <x-application-logo class="h-9 w-auto"/>
        </a>
    </div>

    <!-- Sidebar Links -->
    <nav class="flex items-center gap-3 pl-8 cursor-pointer">
        <img src="" alt="icon">
        <a href="{{ route('home') }}">Home</a>
    </nav>

    <nav class="flex items-center gap-3 pl-8 cursor-pointer">
        <a href="{{ route('profile.edit') }}">Profile</a>
    </nav>

    <nav class="flex items-center gap-3 pl-8 cursor-pointer">
        <a href="{{ route('logout') }}">Logout</a>
    </nav>
    </div>

    <div class="h-[85%] rounded">
        <h1>Subscriptions</h1>
        <div class="p-4 flex items-center justify-between">
            <nav class="flex items-center gap-3">
                <img src="" alt="profile">
                <a href="{{ route('logout') }}">Artist Name</a>
            </nav>
        </div>

        <div class="p-4 bg-[#242424] m-2 rounded flex flex-col items-start justify-start gap-1 pl-4">
            <h1>Create your first playlist</h1>
            <p>It's easy we'll help you</p>
            <button class="px-4 py-1.5 bg-white text-[15px] text-black rounded-full mt-4">Create Playlist</button>
        </div>
    </div>
</div>

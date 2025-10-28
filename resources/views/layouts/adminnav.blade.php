<!-- resources/views/layouts/nav.blade.php -->
<!-- whole nav -->
<nav class="top-0 fixed dark:bg-black bg-white w-full z-30">
<div class="flex justify-between items-center pt-2 pl-7 pb-1 pr-7">
    {{-- logo --}}
    <div>
    <a href="{{ route('admins.index') }}" class="hidden dark:block">
    <x-dark-logo/>
    </a>
    <a href="{{ route('admins.index') }}" class="block dark:hidden">
    <x-light-logo/>
    </a>
    </div>

    {{-- search --}}
    <div class="flex items-center">
    <input type="text" placeholder="Search" class="bg-[#ffffff1a] rounded-full w-[300px] h-[40px] ps-4 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
    
    <div class="flex mx-2">
    <button class="h-10 w-10 flex items-center justify-center rounded-full bg-[#ffffff1a] focus:ring-2 focus:ring-purple-400 hover:text-black">
        <x-search-icon/>
    </button>
    </div>

    {{-- <div class="w-[200px] h-[50px] border border-white">
    </div> --}}
    </div>

    {{-- right side --}}
<div class="flex justify-center items-center">
    <a href="#">
    <x-setting-icon/>
    </a>

    <a href="{{ route('profile.edit') }}">
        <div class="w-[35px] h-[35px] rounded-full overflow-hidden">
                <img class="rounded-full w-[35px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
    </a>
    </div>

    {{-- huamburger --}}
</div>
</nav>
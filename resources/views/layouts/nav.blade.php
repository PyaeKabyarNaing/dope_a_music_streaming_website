<!-- resources/views/layouts/nav.blade.php -->
<!-- whole nav -->
<nav class="top-0 fixed dark:bg-black bg-white w-full z-30">
    <div class="flex justify-between items-center pt-2 pl-7 pb-1 pr-7">
        {{-- logo --}}
        <div class="flex justify-around items-center flex-none">
            <div>
                <x-icons.menu-icon />
            </div>

            <div class="pl-3">
                <a href="{{ route('home') }}" class="hidden dark:block">
                    <x-dark-logo />
                </a>
                <a href="{{ route('home') }}" class="block dark:hidden">
                    <x-light-logo />
                </a>
            </div>
        </div>

        {{-- search --}}
        <div class="flex justify-center items-center grow">
            <input type="text" placeholder="Search"
                class="bg-[#ffffff1a] rounded-full w-[300px] h-[40px] ps-4 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">

            <div class="flex mx-2">
                <button
                    class="h-10 w-10 flex items-center justify-center rounded-full bg-[#ffffff1a] focus:ring-2 focus:ring-purple-400 hover:text-black">
                    <x-icons.search-icon />
                </button>
            </div>

            {{-- <div class="w-[200px] h-[50px] border border-white">
    </div> --}}
        </div>

        {{-- right side --}}
        <div class="flex justify-center items-center flex-none">

            @role('listener')
                <a href="#">
                    <x-special-button />
                </a>
            @endrole

            @role('artist')
                <a href="{{ route('song.create') }}">
                    <x-primary-button>
                        Add new song
                    </x-primary-button>
                </a>
            @endrole


            <a href="#" class="mx-2">
                <x-icons.setting-icon />
            </a>

            <a href="{{ route('user.profile') }}">

                @if (auth()->user()->image)
                    <div class="w-[35px] h-[35px] rounded-full overflow-hidden">
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="profile"
                            class="rounded-full w-[35px] h-auto object-scale-down" alt="profile" />
                    </div>
        </div>
    @else
        <div
            class="w-[35px] h-[35px] bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        @endif
        </a>
    </div>

    {{-- huamburger --}}
    </div>
</nav>

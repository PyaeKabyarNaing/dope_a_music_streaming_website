<x-app-layout>
    {{-- <x-slot name="header">
        
    </x-slot> --}}

    {{-- <div class="w-[75%] float-right m-4 border-box"> --}}

        <div class="mb-4">
            <div class="flex overflow-auto">
                    <p class="m-3 p-3 py-1 text-sm border dark:border-white border-black rounded-full">Pop</p>
                    <p class="m-3 px-3 py-1 text-sm border dark:border-white border-black rounded-full">Rock</p>
                    <p class="m-3 px-3 py-1 text-sm border dark:border-white border-black rounded-full">Hip Hop</p>
                    <p class="m-3 px-3 py-1 text-sm border dark:border-white border-black rounded-full">Opera</p>
            </div>
        </div>

        <div class="flex">
            <div class="w-[40px] h-[40px] rounded-full overflow-hidden">
                <img class="rounded-full w-[40px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
        <h1 class="font-bold text-2xl mt-[1%] ml-2 mb-1">Welcome Back Name</h1>
        </div>

        <div class="mb-4">
            <h1 class="my-5 font-bold text-2xl">
                Featured Charts
            </h1>
            <div class="flex overflow-auto">

                <!-- each album -->
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-sm">Artist Name</p>
                </div>
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                <div class="min-w-[160px] cursor-pointer hover:bg-[#ffffff26] dark:bg-gray-800/10 bg-gray-500/10 m-2 mx-2">
                <div class="w-[160px] h-[160px] overflow-hidden">
                <img class="rounded-t w-[160px] h-[160px]" src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                
            </div>
        </div>

        <div class="mb-4">
            <h1 class="my-5 font-bold text-2xl">
                Popular Atrists
            </h1>
            <div class="flex overflow-auto">

                <!-- each artist -->
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                <div class="min-w-[150px] cursor-pointer hover:bg-[#ffffff26] m-2 mx-2 flex flex-col justify-center items-center">
                <div class="w-[150px] h-[150px] rounded-full overflow-hidden">
                <img class="rounded-full w-[150px] h-auto object-scale-down" src="https://images.unsplash.com/photo-1756838197413-07f174def66c?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile">
                </div>
                    <div class="font-bold mt-3 mb-1">Artist Name</div>
                </div>
                           
            </div>
        </div>

        <div class="h-[79px]"></div>

    {{-- </div> --}}

    {{-- <x-primary-button>Button</x-primary-button>
    <x-secondary-button>Button</x-secondary-button>
    <x-danger-button>Button</x-danger-button>
    <x-responsive-nav-link href="#" :active="true">Link</x-responsive-nav-link>
    <x-responsive-nav-link href="#" >Link</x-responsive-nav-link>
    <x-nav-link href="#" :active="true">Link</x-nav-link>
    <br>

    <x-input-label for="input" :value="__('Input Label')" />
    <x-text-input placeholder="Input"/>
    <x-input-error :messages="['Error message']" class="" /> --}}
</x-app-layout>

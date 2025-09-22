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

        <div class="mb-4">
            <h1 class="my-5 font-bold text-2xl">
                Featured Charts
            </h1>
            <div class="flex overflow-auto">

                <!-- each album -->
                <div class="min-w-[180px] p-2 px-3 rounded cursor-pointer hover:bg-[#ffffff26]">
                    <img src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded object-scale-down">
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Artist Name</p>
                </div>
                <div class="min-w-[180px] p-2 px-3 rounded cursor-pointer hover:bg-[#ffffff26]">
                    <img src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded object-scale-down">
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Song Des</p>
                </div>
                <div class="min-w-[180px] p-2 px-3 rounded cursor-pointer hover:bg-[#ffffff26]">
                    <img src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded object-scale-down">
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Song Des</p>
                </div>
                <div class="min-w-[180px] p-2 px-3 rounded cursor-pointer hover:bg-[#ffffff26]">
                    <img src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded object-scale-down">
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Song Des</p>
                </div>
                <div class="min-w-[180px] p-2 px-3 rounded cursor-pointer hover:bg-[#ffffff26]">
                    <img src="https://images.unsplash.com/photo-1755371034010-51c25321312d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded object-scale-down">
                    <p class="font-bold mt-2 mb-1">Song Name</p>
                    <p class="text-slate-200 text-sm">Song Des</p>
                </div>
            </div>
        </div>

    {{-- </div> --}}
</x-app-layout>

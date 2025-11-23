<div class="mb-4">
    <div class="flex overflow-auto scrollbar-hide">
        @foreach ($genres as $genre)
            <p
                class="m-2 px-3 py-0.5 text-sm border dark:border-white border-black rounded-full flex justify-center items-center whitespace-nowrap">
                {{ $genre->name }}
            </p>
        @endforeach
    </div>
</div>

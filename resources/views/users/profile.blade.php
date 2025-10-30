<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot> --}}
    <a href="{{ route('profile.edit') }}">
        <x-primary-button>Edit Page</x-primary-button>
    </a>
</x-app-layout>
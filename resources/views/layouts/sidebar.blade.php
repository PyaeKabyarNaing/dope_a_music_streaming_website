<!-- resources/views/layouts/sidebar.blade.php -->
<div x-data="{ open: false }" 
     class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 transform transition-transform duration-300 ease-in-out z-20">

    <!-- Logo -->
    <div class="h-16 flex items-center justify-center border-b border-gray-200 dark:border-gray-700 bg-black">
        <a href="{{ route('home') }}">
            <x-application-logo class="h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
        </a>
    </div>

    <!-- Sidebar Links -->
    <nav class="mt-6 px-4 space-y-2">
        <a href="{{ route('home') }}" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
        <a href="{{ route('profile.edit') }}" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
        <a href="{{ route('logout') }}" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
    </nav>
</div>

{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-admin-layout> --}}

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto mt-10">
        <h1 class="font-semibold text-xl mb-6">Manage User Roles</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full shadow-sm rounded">
            <thead class="bg-white text-black">
                <tr>
                    <th class="p-3 text-left">User</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Roles</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-t">
                    <td class="p-3">{{ $user->name }}</td>
                    <td class="p-3">{{ $user->email }}</td>
                    <td class="p-3">
                        <form action="{{ route('admins.updateRoles', $user->id) }}" method="POST">
                            @csrf
                            <div class="flex gap-3 flex-wrap">
                                @foreach($roles as $role)
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" 
                                               name="roles[]" 
                                               value="{{ $role->name }}" 
                                               @if($user->hasRole($role->name)) checked @endif>
                                        <span>{{ ucfirst($role->name) }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <button type="submit" class="mt-2 px-3 py-1 bg-pink-600 text-white rounded hover:bg-pink-700">
                                Save
                            </button>
                        </form>
                    </td>
                    <td class="p-3 text-center">
                        @foreach($user->roles as $role)
                            <span class="px-2 py-1 bg-white text-black rounded text-sm">{{ ucfirst($role->name) }}</span>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
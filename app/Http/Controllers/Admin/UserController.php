<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('admins.index', compact('users', 'roles'));
    }

    public function updateRoles(Request $request, User $user)
    {
        $request->validate([
            'roles' => 'array',
            'roles.*' => 'exists:roles,name'
        ]);

        $user->syncRoles($request->roles ?? []); // remove old & add new roles
        return redirect()->route('admins.index')->with('success', 'Roles updated successfully!');
    }
}

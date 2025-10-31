<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating permissions
        $permission_create_song = Permission::create(['name' => 'create song']);
        $permission_delete_song = Permission::create(['name' => 'delete song']);
        $permission_edit_song = Permission::create(['name' => 'edit song']);
        $permission_view_song = Permission::create(['name' => 'view song']);
        $permission_create_user = Permission::create(['name' => 'create user']);
        $permission_ban_user = Permission::create(['name' => 'ban user']);
        $permission_delete_user = Permission::create(['name' => 'delete user']);
        $permission_view_user = Permission::create(['name' => 'view user']);
        $permission_update_user = Permission::create(['name' => 'update user']);

        // Create roles and assign existing permissions
        $role_listener = Role::create(['name' => 'listener']);
        $role_listener->givePermissionTo('view song');

        $role_artist = Role::create(['name' => 'artist']);
        $role_artist->syncPermissions('view song', 'create song', 'edit song', 'delete song');

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->syncPermissions(Permission::all());

        $user = User::find(1);
        $user->assignRole($role_admin);
        $user = User::find(2);
        $user->assignRole($role_listener);
        $user = User::find(3);
        $user->assignRole($role_artist);
    }
}

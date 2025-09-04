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
        Permission::create(['name' => 'create songs']);
        Permission::create(['name' => 'delete songs']);
        Permission::create(['name' => 'edit songs']);
        Permission::create(['name' => 'view songs']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'ban users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'update users']);

        // Create roles and assign existing permissions
        $role = Role::create(['name' => 'listener']);
        $role->givePermissionTo('view songs');

        $role = Role::create(['name' => 'artist']);
        $role->givePermissionTo('view songs', 'create songs', 'edit songs', 'delete songs');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}

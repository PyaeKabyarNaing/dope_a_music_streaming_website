<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Genre;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $list = ['Pop', 'Rock', 'Classical', 'Opera', 'Country', 'Jazz', 'Blues', 'EDM', 'Hip Hop', 'R&B', 'DJ', 'Folk', 'Metal', 'Punk', 'Disco', 'Funk', 'Dance'];
        foreach($list as $name) {
            Genre::create(['name' => $name]);
        }

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'tadmin@example.com',
        ]);
        User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test Artist',
            'email' => 'tartist@example.com',
        ]);

        $this->call(RolePermissionSeeder::class);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

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
        $list = ['Pop', 'Rock', 'Classical', 'Opera', 'Country', 'Jazz', 'Blues', 'Reggae', 'Hip Hop', 'R&B', 'Electronic', 'Folk', 'Metal', 'Punk', 'Disco', 'Funk', 'Gospel', 'Ska', 'Soul', 'Techno'];
        foreach($list as $name) {
            Genre::create(['name' => $name]);
        }

        $this->call(RolePermissionSeeder::class);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Genre;
use App\Models\Song;
use App\Models\Album;
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

        Album::create([
            'name' => 'Album Bohemian',
            'artist_name' => 'Queen',
            'cover_image' => 'images/69253a92d1f4b.jpg',
            'description' => 'des',
            'release_year' => 1999,
            'user_id' => 3,
        ]);
        Album::create([
            'name' => 'Another Album',
            'artist_name' => 'Another Queen',
            'cover_image' => 'images/69253a2548f0e.jpg',
            'description' => 'des',
            'release_year' => 2000,
            'user_id' => 3,
        ]);

        Song::create([
            'name' => 'Bohemian Rhapsody 1',
            'artist_name' => 'Queen',
            'ft_artist_name' => 'noone',
            'cover_image' => 'images/69253a2548f0e.jpg',
            'audio_file' => 'songs/69253a254aba0.mp3',
            'album_id' => 1,
            'genre_id' => Genre::where('name', 'Rock')->first()->id,
            'user_id' => 3,
        ]);
        Song::create([
            'name' => 'Bohemian Rhapsody 2',
            'artist_name' => 'Queen',
            'ft_artist_name' => 'noone',
            'cover_image' => 'images/69253a2548f0e.jpg',
            'audio_file' => 'songs/69253a254aba0.mp3',
            'album_id' => 1,
            'genre_id' => Genre::where('name', 'Rock')->first()->id,
            'user_id' => 3,
        ]);
        Song::create([
            'name' => 'Bohemian Rhapsody 3',
            'artist_name' => 'Queen',
            'ft_artist_name' => 'noone',
            'cover_image' => 'images/69253a2548f0e.jpg',
            'audio_file' => 'songs/69253a254aba0.mp3',
            'album_id' => 1,
            'genre_id' => Genre::where('name', 'Rock')->first()->id,
            'user_id' => 3,
        ]);
    }
}

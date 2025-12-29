<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::create([
            'spotify_id' => '1',
            'name' => 'Coldplay',
            'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb1ba8fc5f5c73a4b2d2c4d9f1',
            'price' => 50000,
        ]);

        Artist::create([
            'spotify_id' => '2',
            'name' => 'Imagine Dragons',
            'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb7c7d3e1a2f7f18495df2da233',
            'price' => 42000,
        ]);

        Artist::create([
            'spotify_id' => '3',
            'name' => 'Bruno Mars',
            'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebcfd3c9c4e1b3b2c8b5c5a5a1',
            'price' => 60000,
        ]);

        $this->call([
        ArtistSeeder::class,
    ]);
    }
}

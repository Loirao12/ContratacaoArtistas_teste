<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Return a list of artists.
     *
     * This endpoint simulates an external API (Spotify, Deezer, etc).
     * We are using a mock list to keep the backend stable and simple.
     *
     * Query params:
     * - search (optional): filter artists by name
     *
     * Example:
     * GET /api/artists
     * GET /api/artists?search=cold
     */
    public function index(Request $request)
    {
        // Mocked list of artists (could be replaced by Spotify API later)
        $artists = collect([
            [
                'id' => 1,
                'name' => 'Coldplay',
                'genre' => 'Rock',
                'price' => 50000,
                'image' => 'https://s2.glbimg.com/sjCL2m_2ekX9brPh0QAax0b4V5o=/600x0/filters:quality(70)/i.s3.glbimg.com/v1/AUTH_b0f0e84207c948ab8b8777be5a6a4395/internal_photos/bs/2022/c/i/lhkegORfKYggutVJpDVw/2018-04-17-chris.jpeg'
            ],
            [
                'id' => 2,
                'name' => 'Drake',
                'genre' => 'Hip Hop',
                'price' => 80000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQietdQFKqqUm8DXfp80-zcyLW6fky3exPu2g&s'
            ],
            [
                'id' => 3,
                'name' => 'Taylor Swift',
                'genre' => 'Pop',
                'price' => 90000,
                'image' => 'https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/02/taylor-swift-e1753710352997.jpg?w=1200&h=1200&crop=1'
            ],
            [
                'id' => 4,
                'name' => 'Alan Jackson',
                'genre' => 'Country',
                'price' => 100000,
                'image' => 'https://imgs.search.brave.com/2P-5k_UORQfDK1p4QV7LQdddMIdRFjUUPr7leDHQRvg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZmFtb3VzYmlydGhk/YXlzLmNvbS9oZWFk/c2hvdHMvYWxhbi1q/YWNrc29uLTkuanBn'   
            ],
            [
                'id' => 5,
                'name' => 'Fanfic Sonora',
                'genre' => 'Rap Anime',
                'price' => 15000,
                'image' => 'https://akamai.sscdn.co/letras/115x115/fotos/d/9/2/f/d92f9ccdd1d7ebebcd5b00f791f60f28.jpg'
            ],
             
            
        ]);

        // If a search query exists, filter artists by name
        if ($request->filled('search')) {
            $search = strtolower($request->query('search'));

            $artists = $artists->filter(function ($artist) use ($search) {
                return str_contains(strtolower($artist['name']), $search);
            })->values();
        }

        // Return artists as JSON
        return response()->json($artists);
    }
}

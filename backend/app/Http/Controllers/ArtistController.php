<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Services\SpotifyService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    private SpotifyService $spotifyService;

    public function __construct(SpotifyService $spotifyService){
        $this->spotifyService = $spotifyService;
    }

    public function search(Request $reuqest){
        $request->validate([
            'name' => 'required|string'
        ]);

        return $this->spotifyService->searchArtist($request->name);
    }

    public function store(StoreArtistRequest $request){
        $artist = Artist::create($request->validated());

        return response()->json($artist, 201);
    }

    public function index(){
        return Artist::all();
    }
}

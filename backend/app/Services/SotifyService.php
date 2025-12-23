<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SpotifyService
{
    private function getAccessToken()
    {
        $response = Http::asForm()
            ->withBasicAuth(
                config('services.spotify.client_id'),
                config('services.spotify.client_secret')
            )
            ->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'client_credentials',
            ]);

        return $response->json()['access_token'];
    }

    public function searchArtist(string $name)
    {
        $token = $this->getAccessToken();

        $response = Http::withToken($token)
            ->get('https://api.spotify.com/v1/search', [
                'q' => $name,
                'type' => 'artist',
                'limit' => 10
            ]);

        return collect($response->json()['artists']['items'])->map(function ($artist) {
            return [
                'spotify_id' => $artist['id'],
                'name' => $artist['name'],
                'image_url' => $artist['images'][0]['url'] ?? null,
                'followers' => $artist['followers']['total'] ?? 0,
                'genres' => $artist['genres'] ?? [],
            ];
        });
    }
}

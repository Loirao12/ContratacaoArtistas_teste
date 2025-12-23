<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtistRequest extends FormRequest
{
    public function rules()
    {
        return [
            'spotify_id' => 'required|string|unique:artists,spotify_id',
            'name' => 'required|string',
            'image_url' => 'nullable|string',
            'followers' => 'nullable|integer',
            'genres' => 'nullable|array',
            'price' => 'required|numeric|min:0',
        ];
    }
}

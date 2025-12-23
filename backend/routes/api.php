<?php

use Illuminate\Support\Facades\Routs;
use App\Http\Controllers\ArtistController;

Route::get('/artistsearch', [ArtistController::class, 'search']);
Route::post('/artists', [ArtistController::class, 'store']);
Route::get('artists', [ArtistController::class, 'index']);


// use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return response()->json(['ok' => true]);
// });

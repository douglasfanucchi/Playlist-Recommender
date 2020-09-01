<?php

namespace App\Http\Controllers;

use App\Services\Spotify\Playlists\PlaylistFactory;
use App\Services\Spotify\Spotify;
use App\Services\Weather;
use Illuminate\Http\JsonResponse;

class SpotifyController extends Controller
{
  public function index(Weather $weather, Spotify $spotify, string $locationInfo)
  {
    try {
      $weather->setTemperatureFrom($locationInfo);
    } catch (\Exception $e) {
      return new JsonResponse(['error' => ["status" => 401, "message" => "Invalid location"],], 401);
    }

    $temperature = $weather->getTemperature();

    $playlist = PlaylistFactory::getPlaylist($temperature);
    $playlist = $spotify->getPlaylist($playlist);

    return new JsonResponse($playlist);
  }
}

<?php

namespace App\Services\Spotify;

use App\Services\Spotify\Playlists\IPlaylist;
use Illuminate\Support\Facades\Http;

class Spotify
{
  private string $getTokenUrl = 'https://accounts.spotify.com/api/token';
  private string $token;

  public function getPlaylist(IPlaylist $playlist)
  {
    $headers = ['Authorization' => 'Bearer ' . $this->token];
    $url     = 'https://api.spotify.com/v1/playlists/' . $playlist->getPlaylistId();

    $request = Http::withHeaders($headers);
    $respose = $request->get($url);

    $json = $respose->body();
    $body = json_decode($json);
    return $this->hydrateBody($body);
  }

  public function setToken(): void
  {
    $this->token = $this->getToken();
  }

  private function getToken(): string
  {
    $headers = ['Authorization' => 'Basic ' . base64_encode(env('SPOTIFY_ID') . ':' . env('SPOTIFY_SECRET'))];
    $body    = ['grant_type' => 'client_credentials'];

    $request  = Http::withHeaders($headers)->asForm();
    $response = $request->post($this->getTokenUrl, $body);

    $json = $response->body();
    $body = json_decode($json);

    return $body->access_token;
  }

  private function hydrateBody(\stdClass $body): array
  {
    $playlist = array_map(function ($item) {
      $track = $item->track;

      return [
        "name" => $track->name,
        "duration" => $track->duration_ms,
        "url" => $track->external_urls->spotify,
        "uri" => $track->uri,
      ];
    }, $body->tracks->items);

    return ["name" => $body->name, "tracks" => $playlist];
  }
}

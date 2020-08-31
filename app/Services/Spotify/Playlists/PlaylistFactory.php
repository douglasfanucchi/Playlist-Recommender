<?php

namespace App\Services\Spotify\Playlists;

class PlaylistFactory
{
  public static function getPlaylist(float $temperature): IPlaylist
  {
    if ($temperature < 10) {
      return new Classic;
    }

    if ($temperature >= 10 && $temperature <= 14)
      return new Rock;

    if ($temperature >= 15 && $temperature <= 30)
      return new Pop;

    if ($temperature > 30)
      return new Party;
  }
}

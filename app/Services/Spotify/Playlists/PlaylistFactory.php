<?php

namespace App\Services\Spotify\Playlists;

class PlaylistFactory
{
  public static function getPlaylist(float $temperature): IPlaylist
  {
    if ($temperature < 10) {
      return new Classic;
    }

    if ($temperature > 9 && $temperature < 15)
      return new Rock;

    if ($temperature > 14 && $temperature < 31)
      return new Pop;

    if ($temperature > 30)
      return new Party;
  }
}

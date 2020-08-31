<?php

namespace App\Services\Spotify\Playlists;

class PlaylistFactory
{
  public static function getPlaylist(int $temperature): string
  {
    if ($temperature < 10)
      return Classic::class;

    if ($temperature >= 10 && $temperature <= 14)
      return Rock::class;

    if ($temperature >= 15 && $temperature <= 30)
      return Pop::class;

    if ($temperature > 30)
      return Party::class;
  }
}

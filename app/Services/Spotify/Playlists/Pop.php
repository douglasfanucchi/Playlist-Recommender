<?php

namespace App\Services\Spotify\Playlists;

class Pop implements IPlaylist
{
  private int $minTemperature = 0;
  private int $maxTemperature = 9;
  private string $playlistId  = '2QnXgeIf2hOmwqQmzdNZdC?si=qe8LG8lTTQ65i5bEJJYlfg';

  public function getMinTemperature(): int
  {
    return $this->minTemperature;
  }

  public function getMaxTemperature(): int
  {
    return $this->maxTemperature;
  }

  public function getPlaylistId(): string
  {
    return $this->playlistId;
  }
}

<?php

namespace App\Services\Spotify\Playlists;

class Party implements IPlaylist
{
  private int $minTemperature = 0;
  private int $maxTemperature = 9;
  private string $playlistId  = '37i9dQZF1DXaXB8fQg7xif?si=qDaur9gTTiqYG97VwuzKOQ37i9dQZF1DXaXB8fQg7xif?si=qDaur9gTTiqYG97VwuzKOQ';

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

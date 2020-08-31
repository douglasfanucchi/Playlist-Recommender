<?php

namespace App\Services\Spotify\Playlists;

class Classic implements IPlaylist
{
  private int $minTemperature = 0;
  private int $maxTemperature = 9;
  private string $playlistId  = '2QnXgeIf2hOmwqQmzdNZdC?si=2spX2nYQSS-88vN_WR24Mg';

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

<?php

namespace App\Services\Spotify\Playlists;

class Rock implements IPlaylist
{
  private int $minTemperature = 10;
  private int $maxTemperature = 14;
  private string $playlistId  = '17Q4lT7UFT3jBBwydNo4TT?si=2bBL1h2VRAKUbnBdxplKEg';

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

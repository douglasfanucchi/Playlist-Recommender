<?php

namespace App\Spotify\Playlists;

class Classic implements IPlaylist
{
  private int $minTemperature = 0;
  private int $maxTemperature = 9;
  private string $playlistId  = '7tvRjnyp29STnwNIkFmuD0?si=JYq4CqOsSb-Dl9UMdzkEIg';

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

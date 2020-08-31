<?php

namespace App\Spotify\Playlists;

interface IPlaylist
{
  public function getMinTemperature(): int;
  public function getMaxTemperature(): int;
  public function getPlaylistId(): string;
}

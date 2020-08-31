<?php

namespace App\Providers;

use App\Services\Spotify\Spotify;
use Illuminate\Support\ServiceProvider;

class SpotifyServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->singleton(Spotify::class, function () {
      return new Spotify();
    });
  }

  public function boot(Spotify $spotify)
  {
    $spotify->setToken();
  }
}

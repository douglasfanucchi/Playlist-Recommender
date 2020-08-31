<?php

namespace App\Providers;

use App\Services\Weather;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->singleton(Weather::class, function () {
      return new Weather;
    });
  }
}

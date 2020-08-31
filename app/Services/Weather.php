<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class Weather
{
  private string $token;
  private float $temperature;

  const API_URL = 'http://api.openweathermap.org/data/2.5/weather';

  public function __construct()
  {
    $this->token = env('WEATHER_TOKEN');
  }

  public function setTemperatureFrom(string $locationInfo)
  {
    $this->temperature = $this->getTemperatureFromApi($locationInfo);
  }

  public function getTemperature()
  {
    return $this->temperature;
  }

  private function getTemperatureFromApi(string $locationInfo): float
  {
    $queryString = http_build_query([
      'q' => $locationInfo,
      'appid' => $this->token,
      'units' => 'metric'
    ]);

    $response = Http::get(self::API_URL . '/?' . $queryString);
    $body     = json_decode($response->body());

    if (!empty($body->main) && !empty($body->main->temp)) {
      return $body->main->temp;
    }

    throw new Exception('Something went wrong with the API call!');
  }
}

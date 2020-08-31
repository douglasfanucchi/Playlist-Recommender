<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
  public function index(Request $request)
  {
    return new JsonResponse(new \stdClass);
  }
}

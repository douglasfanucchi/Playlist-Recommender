<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class TestMiddleware
{
  public function handle(Request $request, \Closure $next)
  {

    return $next($request);
  }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class DecodeParametersValueMiddleware
{
  public function handle(Request $request, \Closure $next)
  {
    list($_, $routeConfig, $params) = $request->route();

    $parametersDecoded = $this->decodeParametersValue($params);
    $routeResolver     = [$_, $routeConfig, $parametersDecoded];

    $this->setRouteResolver($request, $routeResolver);

    return $next($request);
  }

  private function decodeParametersValue(array $params): array
  {
    return array_map(function ($param) {
      return urldecode($param);
    }, $params);
  }

  private function setRouteResolver(Request $request, array $routeResolver)
  {
    $request->setRouteResolver(function () use ($routeResolver) {
      return $routeResolver;
    });
  }
}

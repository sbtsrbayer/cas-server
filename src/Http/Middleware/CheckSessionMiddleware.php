<?php

namespace Loren138\CASServer\Http\Middleware;

use Closure;

class CheckSessionMiddleware
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->isStarted()) {
            throw new \Exception('Sessions are required for CAS Server.  Please re-enable the session middleware.');
        }

        return $next($request);
    }

}

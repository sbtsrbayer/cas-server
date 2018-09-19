<?php

namespace Loren138\CASServer\Http\Middleware;

use Closure;

class CheckSessionMiddleware
{

    public function handle($request, Closure $next)
    {
        echo "in middleware\n";
        if (!$request->session()->isStarted()) {
        echo "throwing exception\n";
            throw new \Exception('Sessions are required for CAS Server.  Please re-enable the session middleware.');
        }

        return $next($request);
    }

}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DevAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $username = $request->getUser();
        $password = $request->getPassword();

        if(App::environment('develop')) {
            if ($username == 'hion' && $password == 'h4649731') {
                return $next($request);
            }

            abort(401, "Enter username and password.", [
                header('WWW-Authenticate: Basic realm="Sample Private Page"'),
                header('Content-Type: text/plain; charset=utf-8')
            ]);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
          if ($this->auth->user()->hasAccessToPath($request->path(), $request->method()))
          {
            return $next($request);
          } else {
            return $this->bounceNoAuth($request);
          }
        } 

        return $this->bounceGuest($request);
    }

    private function bounceGuest($request)
    {
      if ($request->ajax()) {
          return response('Unauthorized.', 401);
      } else {
          return redirect()->guest('auth/login');
      }
    }

    private function bounceNoAuth($request)
    {
      if ($request->ajax()) {
        return response('Unauthorized', 401);
      } else {
        return redirect()->guest('/')->with('flash_message', 'You cannot access that page.');
      }
    }
}

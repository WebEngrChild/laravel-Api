<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Arr;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if ($request->path() == "oauth/authorize" && $request->query('client_id') && $request->query('client_id') == \Config::get('app.next_app_client_id')) {
                return route('login', ['client_id' => 'nextapp']);
            }
            return route('login');
        }
    }
}

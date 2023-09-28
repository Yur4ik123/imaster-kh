<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->input('locale');
        if(isset($locale)){
            \App::setLocale($locale);
        }
        return $next($request);
    }
}

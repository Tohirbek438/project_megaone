<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Language
{

    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            // Fallback to the default locale
            app()->setLocale(config('app.locale'));
        }

        return $next($request);
    }
}

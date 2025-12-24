<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class ApplyLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if ($locale && in_array($locale, ['az','en','ru','de','es','fr','zh'])) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}

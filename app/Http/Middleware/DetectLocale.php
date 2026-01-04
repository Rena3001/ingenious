<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class DetectLocale
{
    public function handle(Request $request, Closure $next)
    {
        // 1️⃣ Əgər user özü dil seçibsə → toxunma
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
            return $next($request);
        }

        // 2️⃣ IP ölkəsini yoxla
        $ip = $request->ip();

        try {
            $location = geoip($ip); // torann/geoip və ya spatie/laravel-geoip
            $countryCode = $location->iso_code;
        } catch (\Exception $e) {
            $countryCode = null;
        }

        // 3️⃣ QAYDA
        if ($countryCode === 'AZ') {
            App::setLocale('az');
        } else {
            App::setLocale('en'); // xaric → EN
        }

        return $next($request);
    }
}

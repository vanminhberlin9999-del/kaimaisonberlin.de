<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale') ?? 'en';

        // Only allow valid locales
        if (!in_array($locale, ['en', 'de'])) {
            $locale = 'en'; // Default to English
        }

        // Set locale globally
        App::setLocale($locale);
        Session::put('locale', $locale);

        // ✅ Fix setlocale() usage
        setlocale(LC_ALL, $locale . '.UTF-8'); // Now $locale is always valid

        return $next($request);
    }
}

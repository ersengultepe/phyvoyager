<?php

namespace App\Http\Middleware;

use Closure;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $requLog::info('lang', ['item' => Session::get('lang')]);est
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
            Log::info('locale', ['ddd', Session::get('locale')]);
        }
        Log::info('locale', ['ddd', Session::get('locale')]);
        return $next($request);
    }
}

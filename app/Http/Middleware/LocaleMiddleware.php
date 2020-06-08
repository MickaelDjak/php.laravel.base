<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;
use App\Services\Locale\Locale;

/**
 * Class LocaleMiddleware
 * @package App\Http\Middleware
 */
class LocaleMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        App::setLocale(Locale::get());

        return $next($request);
    }

}

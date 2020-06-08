<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use App\Services\Locale\Locale;

/**
 * Class LocaleController
 * @package App\Http\Controllers
 */
class LocaleController
{
    /**
     * @param $lang
     * @return Application|RedirectResponse|Redirector
     */
    public function index($lang)
    {
        $referer = Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        $segments = explode('/', $parse_url);

        if (!in_array($segments[1], Locale::$languages)) {
            return redirect($referer);
        }

        unset($segments[1]); //удаляем метку
        array_splice($segments, 1, 0, $lang);

        $url = Request::root() . implode("/", $segments);

        if (parse_url($referer, PHP_URL_QUERY)) {
            $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
        }

        return redirect($url);

    }
}

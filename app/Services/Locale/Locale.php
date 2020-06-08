<?php

namespace App\Services\Locale;

use Illuminate\Support\Facades\Request;

/**
 * Class Locale
 * @package App\Services\Locale
 */
class Locale
{
    /** @var string */
    public static $mainLanguage = 'ru';

    /** @var string[] */
    public static $languages = ['en', 'ru', 'uk'];

    /**
     * @return mixed|string
     */
    public static function get()
    {
        $uri = Request::path();

        $segmentsURI = explode('/', $uri);

        if (empty($segmentsURI[0])) {
            return self::$mainLanguage;
        }

        if (in_array($segmentsURI[0], self::$languages)) {
            return $segmentsURI[0];
        }

        return self::$mainLanguage;
    }
}

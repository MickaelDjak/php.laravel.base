<?php

namespace App\Services\BibleFragmentParser;

/**
 * Class Parser
 * @package App\Services\BibleFragmentParser
 */
class Parser
{
    /**
     * @param $fragment
     * @return Fragment
     */
    public static function parse($fragment): Fragment
    {
        [$chapter, $verses] = self::split($fragment);

        $result = new Fragment();
        $result->chapter = $chapter;

        $index = strpos($verses, '-');
        if ($index) {
            $result->verseFrom = substr($verses, 0, $index);
            $result->verseTo = substr($verses, $index + 1);
        } else {
            $result->verseFrom = $result->verseTo = $verses;
        }

        return $result;
    }


    /**
     * @param $fragment
     * @return array|int[]
     */
    private static function split($fragment)
    {
        if (strpos($fragment, '.')) {
            return self::explode('.', $fragment);
        }

        if (strpos($fragment, ':')) {
            return self::explode(':', $fragment);
        }

        return [$fragment, 1];
    }

    /**
     * @param $by
     * @param $fragment
     * @return array
     */
    private static function explode($by, $fragment)
    {
        $parts = explode($by, $fragment);

        return [
            $parts[0],
            $parts[1] ?? '1',
        ];
    }

}

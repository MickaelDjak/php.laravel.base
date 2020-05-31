<?php

namespace App\View\Composers;

use App\Models\BibleBook;
use App\Models\BibleGoldenVerse;
use App\Models\BibleVerse;
use App\Services\BibleFragmentParser\Fragment;
use Illuminate\View\View;

/**
 * Class BibleGoldenVerseComposer
 * @package App\View\Composers
 */
class BibleGoldenVerseComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $goldenVerse = BibleGoldenVerse::inRandomOrder()->first();

        $verses = BibleVerse::where([
            ['translation_code', 'rst66'],
            ['book_code', $goldenVerse->book_code],
            ['chapter', $goldenVerse->chapter],
            ['verse_number', '>=', $goldenVerse->verse_from],
            ['verse_number', '<=', $goldenVerse->verse_to],
        ])->get();

        $book = BibleBook::where([
            ['translation_code', 'rst66'],
            ['type_code', $goldenVerse->book_code],
        ])->first();

        $view->with('goldenBook', $book);
        $view->with('goldenVerses', $verses);
        $view->with('goldenFragment', $goldenVerse->fragment);
    }
}

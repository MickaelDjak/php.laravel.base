<?php

namespace App\View\Composers;

use App\Models\BibleBook;
use App\Models\DailyBibleReadingFragment;
use Illuminate\View\View;

/**
 * Class DailyBibleReadingFragmentComposer
 * @package App\View\Composers
 */
class DailyBibleReadingFragmentComposer
{

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $fragments = DailyBibleReadingFragment::where([
            ['month_number', date('n')],
            ['day_number', date('j')]
        ])->get();

        $sections = $fragments->reduce(function ($sections, $fragment) {
            $sectionName = $fragment->bible_book_type;
            $sections[$sectionName] = $sectionName;
            return $sections;
        }, []);

        $books = BibleBook::where('translation_code', 'rst66')->whereIn('type_code', $sections)->get();
        $booksList = [];
        foreach ($books as $book) {
            $booksList[$book->type_code] = $book->name;
        }

        $view->with('dailyBibleReadingFragments', $fragments);
        $view->with('dailyBibleReadingFragmentBooks', $booksList);
    }
}

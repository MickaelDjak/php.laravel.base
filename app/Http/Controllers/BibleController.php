<?php

namespace App\Http\Controllers;

use App\Models\BibleBook;
use App\Models\BibleBookType;
use App\Models\BibleSectionType;
use App\Models\BibleTranslate;
use App\Models\BibleVerse;

class BibleController extends Controller
{
    public function index($translation = 'rst66')
    {
        $bibleTranslation = BibleTranslate::find($translation);

        $bookTypes = BibleBookType::with(['book' => function ($query) use ($translation) {
            $query->where('translation_code', $translation);
        }])->get();


        $bibleSection = BibleSectionType::with(['section' => function ($query) use ($translation) {
            $query->where('translation_code', $translation);
        }])->get();


        return view('bible.index', [
            'translation' => $bibleTranslation,
            'oldTestament' => $bookTypes->filter(function ($bbt) {
                return $bbt->testament_code === 'old';
            })->sortBy('ordering'),
            'newTestament' => $bookTypes->filter(function ($bbt) {
                return $bbt->testament_code === 'new';
            })->sortBy('ordering'),
            'oldSection' => $bibleSection->filter(function ($bs) {
                return $bs->testament_code === 'old';
            })->sortBy('ordering'),
            'newSection' => $bibleSection->filter(function ($bs) {
                return $bs->testament_code === 'new';
            })->sortBy('ordering')
        ]);
    }

    public function chapter($translation, $book, $chapter = 1)
    {
        $verses = BibleVerse::where([
            ['translation_code', $translation],
            ['book_code', $book],
            ['chapter', $chapter]
        ])->orderBy('verse_number')->get();

        return view('bible.page', [
            'verses' => $verses
        ]);
    }
}

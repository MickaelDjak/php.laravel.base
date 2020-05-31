<?php

namespace App\Http\Controllers;

use App\Models\BibleBook;
use App\Models\BibleBookType;
use App\Models\BibleSectionType;
use App\Models\BibleTestament;
use App\Models\BibleTranslate;
use App\Models\BibleVerse;
use App\Services\BibleFragmentParser\Parser;

class BibleController extends Controller
{
    public function index($translation = 'rst66')
    {
        $bibleTranslations = BibleTranslate::all();
        $bibleTranslation = $bibleTranslations->find($translation);

        $testaments = BibleTestament::where('translation_code', $translation)->get();

        $bookTypes = BibleBookType::with(['book' => function ($query) use ($translation) {
            $query->where('translation_code', $translation);
        }])->get();

        $bibleSection = BibleSectionType::with(['section' => function ($query) use ($translation) {
            $query->where('translation_code', $translation);
        }])->get();


        return view('bible.index', [
            'translations' => $bibleTranslations,
            'translation' => $bibleTranslation,
            'newTestamentName' => $testaments->filter(function ($tst) {
                return $tst->type_code === 'new';
            })->first()->name,
            'oldTestamentName' => $testaments->filter(function ($tst) {
                return $tst->type_code === 'old';
            })->first()->name,
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

    public function chapter($translation, $book, $text = 1)
    {
        $fragment = Parser::parse($text);

        $bibleTranslations = BibleTranslate::all();
        $bibleBook = BibleBook::where([
            ['translation_code', $translation],
            ['type_code', $book]
        ])->first();

        $verses = BibleVerse::where([
            ['translation_code', $translation],
            ['book_code', $book],
            ['chapter', $fragment->chapter]
        ])->orderBy('verse_number')->get();

        return view('bible.page', [
            'translations' => $bibleTranslations,
            'verses' => $verses,
            'bibleBook' => $bibleBook,
            'chapter' => $fragment->chapter
        ]);
    }
}

<?php

namespace App\Services\Parsers;

use App\Models\BibleBook;
use App\Models\BibleVerse;
use Illuminate\Support\Facades\Http;

/**
 * Class BibleVersesParser
 * @package App\Services\Parsers
 */
class BibleVersesParser
{
    /**
     *
     */
    public function run()
    {
        $translationInsert = 'ubio';

        $books = BibleBook::where('translation_code', $translationInsert)
            ->whereIn('type_code', [
'jas',
'1pe',
'2pe',
'1jn',
'2jn',
'3jn',
'jud',
'rom',
'1co',
'2co',
'gal',
'eph',
'php',
'col',
'1th',
'2th',
'1ti',
'2ti',
'tit',
'phm',
'heb',
'rev',





            ])
            ->orderBy('id', 'asc')
            ->get();

                $translationSelect = 'ukr';
        echo '<pre>';
        foreach ($books as $book) {
            $code = $book->type_code;
            print_r($code . '<br/>');
            foreach (range(1, $book->number_of_chapters) as $chapterNumber) {
                print_r($chapterNumber . '<br/>');
                $verses = $this->parse($translationSelect, $code, $chapterNumber);
                $this->insert($verses, $translationInsert, $code);

            }
        }
    }

    /**
     * @param $translation
     * @param $bookCode
     * @param $chapterNumber
     * @return array
     */
    private function parse($translation, $bookCode, $chapterNumber)
    {

        $response = Http::get('https://api.bibleonline.ru/bible', [
            "trans" => $translation,
            "q" => in_array($bookCode, ['2jn','3jn','phm','jud','oba'])  ? $bookCode :$bookCode . " " . $chapterNumber
        ]);

        $str = $response->body();
        $json = preg_replace('/\s+/', ' ', $str);

        foreach ([
                     '/\((\[.*|\s*])\)\;/',
                     '/(\[.*|\s*])/'
                 ] as $pattern) {
            $matches = [];
            preg_match_all($pattern, $json, $matches);
            if (empty($matches[0][0]) === false) {
                break;
            }
        }
//        $this->log([$json, $matches, $pattern]);

        $arr = json_decode($matches[1][0], true);


        $result = [];
        foreach ($arr as $item) {
            if (array_key_exists('v', $item)) {
                $result[] = $item['v'];
            }
        }

        return $result;
    }

    /**
     * @param $data
     */
    private function log($data): void
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
//        exit;
    }

    /**
     * @param $verses
     * @param $translation
     * @param $bookCode
     */
    private function insert($verses, $translation, $bookCode)
    {
        set_time_limit(600);
        foreach ($verses as $verse) {
            $model = new BibleVerse();
            $model->translation_code = $translation;
            $model->book_code = $bookCode;
            $model->chapter = $verse['c'];
            $model->verse_number = $verse['n'];
            $model->verse_text = $verse['t'];
            $model->save();
        }
    }
}

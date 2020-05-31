<?php

namespace App\Http\Controllers;

use App\Models\DailyBibleReadingFragment;
use App\Models\ChurchMeeting;
use App\Services\Parsers\BibleVersesParser;
use PHPHtmlParser\Dom;

class CalendarController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        try {
            $p = new BibleVersesParser();
            $p->run();

        } catch (\Throwable$e) {
            print_r($e->getMessage());
            print_r($e);
        }
        exit;

        return view('pages.calendar', ['meetings' => ChurchMeeting::getLast()]);
    }


    /**
     *
     */
    public function load()
    {
        foreach (range(1, 365) as $i) {
            $url = "https://bibleonline.ru/plan/robertson/$i/";
            $file = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "date_$i.html";
            $data = file_get_contents($url);
            file_put_contents($file, $data);
        }
    }

    /**
     * @param $i
     * @return array
     * @throws \PHPHtmlParser\Exceptions\ChildNotFoundException
     * @throws \PHPHtmlParser\Exceptions\CircularException
     * @throws \PHPHtmlParser\Exceptions\LogicalException
     * @throws \PHPHtmlParser\Exceptions\NotLoadedException
     * @throws \PHPHtmlParser\Exceptions\StrictException
     */
    public function parse($i)
    {
        $result = [];
        $result['number'] = $i;
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . "date_$i.html";

        $dom = new Dom;
        $dom->loadFromFile($file);
        $contents = $dom->find('h1', 1);
        $str = $contents->find('small', 0)->innerHtml;

        $re = '/(\d*)\s(\w*)/u';
        preg_match($re, $str, $matches);
        $result['date'] = $matches;

        $contentsTr = $dom->find('table td');
        $iterator = $contentsTr->getIterator();

        while ($iterator->valid()) {
            $partOfDay = [];
            $partOfDay['links'] = [];
            $when = $iterator->current();
            $partOfDay['part_of_day'] = $when->innerHtml;
            $iterator->next();
            $link = $iterator->current();

            foreach ($link->find('a') as $linkA) {

                $re = '/\/(\w*)-(.*)\/$/';
                preg_match($re, $linkA->getAttribute('href'), $matches);
                if (empty($matches)) {
                    continue;
                }
                $partOfDay['links'][] = $matches;
            }
            $iterator->next();

            $result['part_of_day'][] = $partOfDay;
        }

        return $result;
    }

    /**
     * @param $i
     */
    public function insert($i)
    {
        foreach ($i['part_of_day'] as $part_of_day) {
            foreach ($part_of_day['links'] as $links) {
                $model = new DailyBibleReadingFragment();
                $model->day_number = $i['number'];
                $model->part_of_day = $part_of_day['part_of_day'];
                $model->book_shortcut = $links[1];
                $model->text_fragment = $links[2];
                $model->date_reading = '2020-10-10';
                $model->description_day_number = $i['date'][1];
                $model->description_month_number = $i['date'][2];
                $model->save();
            }
        }
    }
}

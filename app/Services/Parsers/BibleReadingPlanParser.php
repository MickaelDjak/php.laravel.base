<?php

namespace App\Services\Parsers;

use App\Models\DailyBibleReadingFragment;
use PHPHtmlParser\Dom;
use PHPHtmlParser\Exceptions\ChildNotFoundException;
use PHPHtmlParser\Exceptions\CircularException;
use PHPHtmlParser\Exceptions\LogicalException;
use PHPHtmlParser\Exceptions\NotLoadedException;
use PHPHtmlParser\Exceptions\StrictException;

/**
 * Class BibleReadingPlanParser
 * @package App\Services\Parsers
 */
class BibleReadingPlanParser
{
    /**
     * @throws ChildNotFoundException
     * @throws CircularException
     * @throws LogicalException
     * @throws NotLoadedException
     * @throws StrictException
     */
    public function run()
    {
        foreach (range(1, 365) as $i) {
            set_time_limit(60);
            $this->insert($this->parse($i));
        }
    }


    /**
     *
     */
    private function read()
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
     * @throws ChildNotFoundException
     * @throws CircularException
     * @throws LogicalException
     * @throws NotLoadedException
     * @throws StrictException
     */
    private function parse($i)
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
    private function insert($i)
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

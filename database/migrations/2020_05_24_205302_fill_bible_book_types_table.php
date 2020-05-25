<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleBookTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $list = [
            ['gen', 'Бытие',  'pentateuch', 'old'],
            ['exo', 'Исход',  'pentateuch', 'old'],
            ['lev', 'Левит',  'pentateuch', 'old'],
            ['num', 'Числа',  'pentateuch', 'old'],
            ['deu', 'Второзаконие',  'pentateuch', 'old'],
            ['jos', 'Иисус Навин', 'historical', 'old'],
            ['jdg', 'Судьи', 'historical', 'old'],
            ['rut', 'Руфь', 'historical', 'old'],
            ['1sa', '1 Царств', 'historical', 'old'],
            ['2sa', '2 Царств', 'historical', 'old'],
            ['1ki', '3 Царств', 'historical', 'old'],
            ['2ki', '4 Царств', 'historical', 'old'],
            ['1ch', '1 Паралипоменон', 'historical', 'old'],
            ['2ch', '2 Паралипоменон', 'historical', 'old'],
            ['ezr', 'Ездра', 'historical', 'old'],
            ['neh', 'Неемия', 'historical', 'old'],
            ['est', 'Есфирь', 'historical', 'old'],
            ['job', 'Иов', 'educational', 'old'],
            ['psa', 'Псалтирь', 'educational', 'old'],
            ['pro', 'Притчи', 'educational', 'old'],
            ['ecc', 'Екклеcиаст', 'educational', 'old'],
            ['sng', 'Песня песней', 'educational', 'old'],
            ['isa', 'Исаия', 'big_prophets', 'old'],
            ['jer', 'Иеремия', 'big_prophets', 'old'],
            ['lam', 'Плач Иеремии', 'big_prophets', 'old'],
            ['ezk', 'Иезекииль', 'big_prophets', 'old'],
            ['dan', 'Даниил', 'big_prophets', 'old'],
            ['hos', 'Осия', 'small_prophets', 'old'],
            ['jol', 'Иоиль', 'small_prophets', 'old'],
            ['amo', 'Амос', 'small_prophets', 'old'],
            ['oba', 'Авдий', 'small_prophets', 'old'],
            ['jon', 'Иона', 'small_prophets', 'old'],
            ['mic', 'Михей', 'small_prophets', 'old'],
            ['nam', 'Наум', 'small_prophets', 'old'],
            ['hab', 'Аввакум', 'small_prophets', 'old'],
            ['zep', 'Софония', 'small_prophets', 'old'],
            ['hag', 'Аггей', 'small_prophets', 'old'],
            ['zec', 'Захария', 'small_prophets', 'old'],
            ['mal', 'Малахия', 'small_prophets', 'old'],
            ['mat', 'Матфея', 'gospels_and_acts', 'new'],
            ['mrk', 'Марка', 'gospels_and_acts', 'new'],
            ['luk', 'Луки', 'gospels_and_acts', 'new'],
            ['jhn', 'Иоанна', 'gospels_and_acts', 'new'],
            ['act', 'Деяния', 'gospels_and_acts', 'new'],
            ['jas', 'Иакова', 'catholic_epistles', 'new'],
            ['1pe', '1 Петра', 'catholic_epistles', 'new'],
            ['2pe', '2 Петра', 'catholic_epistles', 'new'],
            ['1jn', '1 Иоанна', 'catholic_epistles', 'new'],
            ['2jn', '2 Иоанна', 'catholic_epistles', 'new'],
            ['3jn', '3 Иоанна', 'catholic_epistles', 'new'],
            ['jud', 'Иуда', 'catholic_epistles', 'new'],
            ['rom', 'Римлянам', 'paul_epistles', 'new'],
            ['1co', '1 Коринфянам', 'paul_epistles', 'new'],
            ['2co', '2 Коринфянам', 'paul_epistles', 'new'],
            ['gal', 'Галатам', 'paul_epistles', 'new'],
            ['eph', 'Ефесянам', 'paul_epistles', 'new'],
            ['php', 'Филиппийцам', 'paul_epistles', 'new'],
            ['col', 'Колоссянам', 'paul_epistles', 'new'],
            ['1th', '1 Фессалоникийцам', 'paul_epistles', 'new'],
            ['2th', '2 Фессалоникийцам', 'paul_epistles', 'new'],
            ['1ti', '1 Тимофею', 'paul_epistles', 'new'],
            ['2ti', '2 Тимофею', 'paul_epistles', 'new'],
            ['tit', 'Титу', 'paul_epistles', 'new'],
            ['phm', 'Филимону', 'paul_epistles', 'new'],
            ['heb', 'Евреям', 'paul_epistles', 'new'],
            ['rev', 'Откровение', 'prophetic', 'new'],
        ];

        foreach ($list as $key => $item) {
            DB::insert("INSERT INTO bible_book_types (code, description, ordering, section_code, testament_code) VALUES (:code, :desc, :ordering, :section_code, :testament_code);", [
                'code' => $item[0],
                'desc' => $item[1],
                'section_code' => $item[2],
                'testament_code' => $item[3],
                'ordering' => $key,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete("DELETE FROM bible_book_types;");
    }
}

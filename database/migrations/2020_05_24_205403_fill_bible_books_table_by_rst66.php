<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleBooksTableByRst66 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            ['rst66', 'gen', 'Бытие', 50],
            ['rst66', 'exo', 'Исход', 40],
            ['rst66', 'lev', 'Левит', 27],
            ['rst66', 'num', 'Числа', 36],
            ['rst66', 'deu', 'Второзаконие', 34],

            ['rst66', 'jos', 'Иисус Навин', 24],
            ['rst66', 'jdg', 'Судьи', 21],
            ['rst66', 'rut', 'Руфь', 4],
            ['rst66', '1sa', '1 Царств', 31],
            ['rst66', '2sa', '2 Царств', 24],
            ['rst66', '1ki', '3 Царств', 22],
            ['rst66', '2ki', '4 Царств', 25],
            ['rst66', '1ch', '1 Паралипоменон', 29],
            ['rst66', '2ch', '2 Паралипоменон', 36],
            ['rst66', 'ezr', 'Ездра', 10],
            ['rst66', 'neh', 'Неемия', 13],
            ['rst66', 'est', 'Есфирь', 10],

            ['rst66', 'job', 'Иов', 42],
            ['rst66', 'psa', 'Псалтирь', 150],
            ['rst66', 'pro', 'Притчи', 31],
            ['rst66', 'ecc', 'Екклеcиаст', 12],

            ['rst66', 'sng', 'Песня песней', 8],
            ['rst66', 'isa', 'Исаия', 66],
            ['rst66', 'jer', 'Иеремия', 52],
            ['rst66', 'lam', 'Плач Иеремии', 5],
            ['rst66', 'ezk', 'Иезекииль', 48],
            ['rst66', 'dan', 'Даниил', 12],

            ['rst66', 'hos', 'Осия', 14],
            ['rst66', 'jol', 'Иоиль', 3],
            ['rst66', 'amo', 'Амос', 9],
            ['rst66', 'oba', 'Авдий', 1],
            ['rst66', 'jon', 'Иона', 4],
            ['rst66', 'mic', 'Михей', 7],
            ['rst66', 'nam', 'Наум', 3],
            ['rst66', 'hab', 'Аввакум', 3],
            ['rst66', 'zep', 'Софония', 3],
            ['rst66', 'hag', 'Аггей', 2],
            ['rst66', 'zec', 'Захария', 14],
            ['rst66', 'mal', 'Малахия', 4],

            ['rst66', 'mat', 'Матфея', 28],
            ['rst66', 'mrk', 'Марка', 16],
            ['rst66', 'luk', 'Луки', 24],
            ['rst66', 'jhn', 'Иоанна', 21],
            ['rst66', 'act', 'Деяния', 28],

            ['rst66', 'jas', 'Иакова', 5],
            ['rst66', '1pe', '1 Петра', 5],
            ['rst66', '2pe', '2 Петра', 3],
            ['rst66', '1jn', '1 Иоанна', 5],
            ['rst66', '2jn', '2 Иоанна', 1],
            ['rst66', '3jn', '3 Иоанна', 1],
            ['rst66', 'jud', 'Иуда', 1],
            ['rst66', 'rom', 'Римлянам', 16],
            ['rst66', '1co', '1 Коринфянам', 16],
            ['rst66', '2co', '2 Коринфянам', 13],
            ['rst66', 'gal', 'Галатам', 6],
            ['rst66', 'eph', 'Ефесянам', 6],
            ['rst66', 'php', 'Филиппийцам', 4],
            ['rst66', 'col', 'Колоссянам', 4],
            ['rst66', '1th', '1 Фессалоникийцам', 5],
            ['rst66', '2th', '2 Фессалоникийцам', 3],
            ['rst66', '1ti', '1 Тимофею', 6],
            ['rst66', '2ti', '2 Тимофею', 4],
            ['rst66', 'tit', 'Титу', 3],
            ['rst66', 'phm', 'Филимону', 1],
            ['rst66', 'heb', 'Евреям', 13],

            ['rst66', 'rev', 'Откровение', 22],
        ];

        foreach ($list as $item) {
            DB::insert("INSERT INTO bible_books (translation_code, type_code, name, number_of_chapters) VALUES (:translation_code, :type_code, :name, :number_of_chapters);", [
                'translation_code' => $item[0],
                'type_code' => $item[1],
                'name' => $item[2],
                'number_of_chapters' => $item[3],
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
        DB::delete("DELETE FROM bible_books;");
    }
}

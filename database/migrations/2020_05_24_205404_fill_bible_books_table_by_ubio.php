<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleBooksTableByUbio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $list = [
            ['ubio', 'gen', 'Буття', 50],
            ['ubio', 'exo', 'Вихід', 40],
            ['ubio', 'lev', 'Левит', 27],
            ['ubio', 'num', 'Числа', 36],
            ['ubio', 'deu', 'Повторення Закону', 34],

            ['ubio', 'jos', 'Ісус Навин', 24],
            ['ubio', 'jdg', 'Суддів', 21],
            ['ubio', 'rut', 'Рут', 4],
            ['ubio', '1sa', '1 Самуїлова', 31],
            ['ubio', '2sa', '2 Самуїлова', 24],
            ['ubio', '1ki', '1 Царів', 22],
            ['ubio', '2ki', '2 Царів', 25],
            ['ubio', '1ch', '1 Хроніки', 29],
            ['ubio', '2ch', '2 Хроніки', 36],
            ['ubio', 'ezr', 'Ездра', 10],
            ['ubio', 'neh', 'Неемія', 13],
            ['ubio', 'est', 'Естер', 10],

            ['ubio', 'job', 'Йов', 42],
            ['ubio', 'psa', 'Псалми', 150],
            ['ubio', 'pro', 'Приповісті', 31],
            ['ubio', 'ecc', 'Екклезіяст', 12],
            ['ubio', 'sng', 'Пісня над піснями', 8],

            ['ubio', 'isa', 'Ісая', 66],
            ['ubio', 'jer', 'Єремія', 52],
            ['ubio', 'lam', 'Плач Єремії', 5],
            ['ubio', 'ezk', 'Єзекіїль', 48],
            ['ubio', 'dan', 'Даниїл', 12],

            ['ubio', 'hos', 'Осія', 14],
            ['ubio', 'jol', 'Йоїл', 3],
            ['ubio', 'amo', 'Амос', 9],
            ['ubio', 'oba', 'Овдій', 1],
            ['ubio', 'jon', 'Йона', 4],
            ['ubio', 'mic', 'Михей', 7],
            ['ubio', 'nam', 'Наум', 3],
            ['ubio', 'hab', 'Авакум', 3],
            ['ubio', 'zep', 'Софонія', 3],
            ['ubio', 'hag', 'Огій', 2],
            ['ubio', 'zec', 'Захарія', 14],
            ['ubio', 'mal', 'Малахії', 4],

            ['ubio', 'mat', 'Від Матвія', 28],
            ['ubio', 'mrk', 'Від Марка', 16],
            ['ubio', 'luk', 'Євангеліє від Луки', 24],
            ['ubio', 'jhn', 'Від Івана', 21],
            ['ubio', 'act', 'Діяння', 28],

            ['ubio', 'jas', 'Якова', 5],
            ['ubio', '1pe', '1 Петра', 5],
            ['ubio', '2pe', '2 Петра', 3],
            ['ubio', '1jn', '1 Івана', 5],
            ['ubio', '2jn', '2 Івана', 1],
            ['ubio', '3jn', '3 Івана', 1],
            ['ubio', 'jud', 'Юда', 1],

            ['ubio', 'rom', 'До Римлян', 16],
            ['ubio', '1co', '1 до Коринтян', 16],
            ['ubio', '2co', '2 до Коринтян', 13],
            ['ubio', 'gal', 'До Галатів', 6],
            ['ubio', 'eph', 'До Ефесян', 6],
            ['ubio', 'php', 'До Филип`ян', 4],
            ['ubio', 'col', 'До Колоссян', 4],
            ['ubio', '1th', '1 до Солунян', 5],
            ['ubio', '2th', '2 до Солунян', 3],
            ['ubio', '1ti', '1 Тимофію', 6],
            ['ubio', '2ti', '2 Тимофію', 4],
            ['ubio', 'tit', 'До Тита', 3],
            ['ubio', 'phm', 'До Филимона', 1],
            ['ubio', 'heb', 'До Євреїв', 13],

            ['ubio', 'rev', 'Об`явлення', 22],
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





































































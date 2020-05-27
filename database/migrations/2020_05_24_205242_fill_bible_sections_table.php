<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (1, 'historical', 'rst66', 'Пятикнижие');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (2, 'pentateuch', 'rst66', 'Исторические');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (3, 'educational', 'rst66', 'Учительные');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (4, 'small_prophets', 'rst66', 'Большие пророки');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (5, 'big_prophets', 'rst66', 'Малые пророки');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (6, 'gospels_and_acts', 'rst66', 'Евангелия и Деяния');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (7, 'catholic_epistles', 'rst66', 'Соборные послания');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (8, 'paul_epistles', 'rst66', 'Послания Павла');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (9, 'prophetic', 'rst66', 'Пророческие');",

            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (10, 'historical', 'ubio', 'П`ятикнижжя');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (11, 'pentateuch', 'ubio', 'Історичні');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (12, 'educational', 'ubio', 'Мудрість');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (13, 'small_prophets', 'ubio', 'Пророки');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (14, 'big_prophets', 'ubio', '12 пророків');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (15, 'gospels_and_acts', 'ubio', 'Євангелія і Дії');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (16, 'catholic_epistles', 'ubio', 'Соборні послання');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (17, 'paul_epistles', 'ubio', 'Послання Павла');",
            "INSERT INTO bible_sections (id, type_code, translation_code, name) VALUES (18, 'prophetic', 'ubio', 'Книга пророцька');",
        ];

        foreach ($list as $item) {
            DB::insert($item);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete("DELETE FROM bible_sections;");
    }
}

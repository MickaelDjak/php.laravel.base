<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleSectionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO bible_section_types (code, description) VALUES ('historical', 'Пятикнижие');",
            "INSERT INTO bible_section_types (code, description) VALUES ('pentateuch', 'Исторические');",
            "INSERT INTO bible_section_types (code, description) VALUES ('educational', 'Учительные');",
            "INSERT INTO bible_section_types (code, description) VALUES ('big_prophets', 'Большие пророки');",
            "INSERT INTO bible_section_types (code, description) VALUES ('small_prophets', 'Малые пророки');",
            "INSERT INTO bible_section_types (code, description) VALUES ('gospels_and_acts', 'Евангелия и Деяния');",
            "INSERT INTO bible_section_types (code, description) VALUES ('catholic_epistles', 'Соборные послания');",
            "INSERT INTO bible_section_types (code, description) VALUES ('paul_epistles', 'Послания Павла');",
            "INSERT INTO bible_section_types (code, description) VALUES ('prophetic', 'Пророческие');",
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
        DB::delete("DELETE FROM bible_section_types;");
    }
}

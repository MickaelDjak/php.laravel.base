<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleTestamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO bible_testaments (id, type_code, translation_code, name) VALUES (1, 'new', 'rst66', 'Ветхий Завет');",
            "INSERT INTO bible_testaments (id, type_code, translation_code, name) VALUES (2, 'old', 'rst66', 'Новый Завет');",
            "INSERT INTO bible_testaments (id, type_code, translation_code, name) VALUES (3, 'new', 'ubio', 'Старий Заповіт');",
            "INSERT INTO bible_testaments (id, type_code, translation_code, name) VALUES (4, 'old', 'ubio', 'Новий Заповіт');",
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
        DB::delete("DELETE FROM bible_testaments;");
    }
}

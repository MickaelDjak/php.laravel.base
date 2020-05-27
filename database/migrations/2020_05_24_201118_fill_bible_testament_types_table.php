<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleTestamentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO bible_testament_types (code, description) VALUES ('old', 'Ветхий Завет');",
            "INSERT INTO bible_testament_types (code, description) VALUES ('new', 'Новый Завет');",
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
        DB::delete("DELETE FROM bible_testament_types;");
    }
}

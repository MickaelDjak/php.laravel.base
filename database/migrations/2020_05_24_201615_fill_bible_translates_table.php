<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillBibleTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = [
            "INSERT INTO bible_translates (code, name, description) VALUES ('rst66', 'Русский синодальный перевод','Протестантская редакция');",
            "INSERT INTO bible_translates (code, name, description) VALUES ('ubio', 'Біблія в пер. Івана Огієнка', null);",
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
        DB::delete("DELETE FROM bible_translates;");
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForignKeyBibleGoldenVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bible_golden_verses', function (Blueprint $table) {
            $table->foreign('book_code')->references('code')->on('bible_book_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bible_golden_verses', function (Blueprint $table) {
            $table->dropForeign(['book_code']);
        });
    }
}

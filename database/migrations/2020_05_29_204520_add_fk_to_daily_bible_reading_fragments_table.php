<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToDailyBibleReadingFragmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daily_bible_reading_fragments', function (Blueprint $table) {
            $table->foreign('bible_book_type')->references('code')->on('bible_book_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daily_bible_reading_fragments', function (Blueprint $table) {
            $table->dropForeign(['bible_book_type']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInDailyBibleReadingFragmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daily_bible_reading_fragments', function (Blueprint $table) {
            $table->renameColumn('book_shortcut', 'bible_book_type');
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
            $table->renameColumn('bible_book_type', 'book_shortcut');
        });
    }
}

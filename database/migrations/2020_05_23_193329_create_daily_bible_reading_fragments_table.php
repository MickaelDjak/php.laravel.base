<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyBibleReadingFragmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_bible_reading_fragments', function (Blueprint $table) {
            $table->id();
            $table->integer('ordering');
            $table->string('part_of_day');
            $table->string('book_shortcut');
            $table->string('text_fragment');
            $table->integer('day_number');
            $table->integer('month_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_bible_reading_fragments');
    }
}

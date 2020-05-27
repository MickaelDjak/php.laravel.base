<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_verses', function (Blueprint $table) {
            $table->id();
            $table->string('translation_code');
            $table->string('book_code');
            $table->integer('chapter')->unsigned();
            $table->integer('verse_number')->unsigned();
            $table->string('verse_text', 500);
        });

        Schema::table('bible_verses', function (Blueprint $table) {
            $table->foreign('translation_code')->references('code')->on('bible_translates');
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
        Schema::table('bible_verses', function (Blueprint $table) {
            $table->dropForeign(['translation_code']);
            $table->dropForeign(['book_code']);
        });

        Schema::dropIfExists('bible_verses');
    }
}

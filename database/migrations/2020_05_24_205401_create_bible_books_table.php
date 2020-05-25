<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_books', function (Blueprint $table) {
            $table->id();
            $table->string('translation_code');
            $table->string('type_code');
            $table->string('name');
            $table->integer('number_of_chapters');
        });

        Schema::table('bible_books', function (Blueprint $table){
            $table->foreign('translation_code')->references('code')->on('bible_translates');
            $table->foreign('type_code')->references('code')->on('bible_book_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bible_books', function (Blueprint $table){
            $table->dropForeign(['translation_code']);
            $table->dropForeign(['type_code']);
        });
        Schema::dropIfExists('bible_books');
    }
}

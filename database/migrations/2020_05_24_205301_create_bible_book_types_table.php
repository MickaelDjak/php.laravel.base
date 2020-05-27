<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleBookTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_book_types', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->integer('ordering');
            $table->string('section_code');
            $table->string('testament_code');
            $table->string('description');
        });

        Schema::table('bible_book_types', function (Blueprint $table){
            $table->foreign('section_code')->references('code')->on('bible_section_types');
            $table->foreign('testament_code')->references('code')->on('bible_testament_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bible_book_types', function (Blueprint $table){
            $table->dropForeign(['section_code']);
            $table->dropForeign(['testament_code']);
        });

        Schema::dropIfExists('bible_book_types');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleTestamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_testaments', function (Blueprint $table) {
            $table->id();
            $table->string('type_code');
            $table->string('translation_code');
            $table->string('name');
        });

        Schema::table('bible_testaments', function (Blueprint $table) {
            $table->foreign('type_code')->references('code')->on('bible_testament_types');
            $table->foreign('translation_code')->references('code')->on('bible_translates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bible_testaments', function (Blueprint $table) {
            $table->dropForeign(['type_code']);
            $table->dropForeign(['translation_code']);
        });

        Schema::dropIfExists('bible_testaments');
    }
}

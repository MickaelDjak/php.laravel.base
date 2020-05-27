<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForignKeyToBibleSectionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bible_section_types', function (Blueprint $table) {
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
        Schema::table('bible_section_types', function (Blueprint $table) {
            $table->dropForeign(['testament_code']);
        });
    }
}

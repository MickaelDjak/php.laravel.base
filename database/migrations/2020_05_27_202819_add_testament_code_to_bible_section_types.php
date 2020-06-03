<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestamentCodeToBibleSectionTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bible_section_types', function (Blueprint $table) {
            $table->string('testament_code')->default('old');
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
            $table->dropColumn('testament_code');
        });
    }
}

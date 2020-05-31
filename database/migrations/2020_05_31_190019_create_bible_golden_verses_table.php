<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibleGoldenVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_golden_verses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('book_code');
            $table->string('fragment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bible_golden_verses');
    }
}

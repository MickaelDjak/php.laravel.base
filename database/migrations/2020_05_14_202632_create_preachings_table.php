<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preachings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('preview_text', 500);
            $table->text('detail_text', 3000);
            $table->string('image')->nullable();
            $table->string('audio_url')->nullable();
            $table->bigInteger('author_id')->unsigned()->default(0);
            $table->boolean('status');
            $table->string('slug', 50)->unique();
            $table->timestamps();
        });

        Schema::table('preachings', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preachings');
    }
}

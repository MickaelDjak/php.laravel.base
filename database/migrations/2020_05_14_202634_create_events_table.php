<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->string('preview_text');
            $table->text('detail_text');
            $table->bigInteger('category_id');
            $table->string('image')->nullable();
            $table->bigInteger('author_id')->unsigned()->default(0);
            $table->boolean('status');
            $table->string('slug', 50)->unique();
        });

        Schema::table('events', function (Blueprint $table) {
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
        Schema::dropIfExists('events');
    }
}

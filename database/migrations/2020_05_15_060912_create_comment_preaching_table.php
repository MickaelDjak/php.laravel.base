<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentPreachingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_preaching', function (Blueprint $table) {
            $table->bigInteger('comment_id')->unsigned()->index();
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');

            $table->bigInteger('preaching_id')->unsigned()->index();
            $table->foreign('preaching_id')->references('id')->on('preachings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_preaching');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropNotUsageTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('comment_post');
        Schema::dropIfExists('comment_event');
        Schema::dropIfExists('comment_preaching');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('events');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('preachings');
        Schema::dropIfExists('comments');
    }

}

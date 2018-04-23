<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('location');
            $table->string('body_plate_no');
            $table->string('driver_name')->nullable();
            $table->string('puv');
            $table->string('content');
            $table->string('feelings_title')->nullable();
            $table->string('feelings_uri')->nullable();
            $table->longtext('image')->nullable();
            $table->string('translated');
            $table->string('sentiment_score');
            $table->string('sentiment');
            $table->string('magnitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

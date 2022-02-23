<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->string('image')->nullable();
            $table->text('photos');
            $table->text('video_link')->nullable();
            $table->longText('first_part');
            $table->longText('second_part');
            $table->longText('third_part');
            $table->longText('forth_part');
            $table->longText('fifth_part');
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
        Schema::dropIfExists('story_blogs');
    }
}

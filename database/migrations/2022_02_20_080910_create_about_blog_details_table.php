<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutBlogDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_blog_details', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->string('image');
            $table->text('photos');
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
        Schema::dropIfExists('about_blog_details');
    }
}

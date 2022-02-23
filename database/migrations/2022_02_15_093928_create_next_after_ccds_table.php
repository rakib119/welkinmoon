<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextAfterCcdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_after_ccds', function (Blueprint $table) {
            $table->id();
            $table->string('short_title','150')->nullable();
            $table->string('title_first');
            $table->string('title_second');
            $table->string('first_item');
            $table->string('second_item');
            $table->string('third_item');
            $table->text('short_description');
            $table->string('button_name');
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
        Schema::dropIfExists('next_after_ccds');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_firsts', function (Blueprint $table) {
            $table->id();
            $table->string('short_title','25')->nullable();
            $table->string('title_first');
            $table->string('title_second');
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
        Schema::dropIfExists('service_firsts');
    }
}

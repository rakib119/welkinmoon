<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mother_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('mother_name');
            $table->string('mother_phone_number');
            $table->text('mother_permanent_address');
            $table->text('mother_present_address');
            $table->integer('mother_address_verification')->nullable();
            $table->string('mother_dob');
            $table->string('mother_nid_or_passport');
            $table->string('mother_occupation');
            $table->string('mother_picture');
            $table->string('mother_nid_or_passport_image')->nullable();
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
        Schema::dropIfExists('mother_infos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('father_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('father_name');
            $table->string('father_phone_number');
            $table->string('father_permanent_address');
            $table->text('father_present_address');
            $table->text('father_address_verification')->nullable();
            $table->string('father_dob');
            $table->string('father_nid_or_passport');
            $table->string('father_occupation');
            $table->string('father_picture')->nullable();
            $table->string('father_nid_or_passport_image');
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
        Schema::dropIfExists('father_infos');
    }
}

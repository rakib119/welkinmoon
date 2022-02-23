<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('Last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('date_of_birth');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('picture');
            $table->string('nid_or_dob_number');
            $table->string('nid_or_dob_font');
            $table->string('nid_back');
            $table->string('marital_status');
            $table->string('NID_Card_Or_DOB_Attested_copy');
            $table->string('zip_code');
            $table->string('education_certificate');
            $table->string('occupation');
            $table->string('statement');
            $table->string('religion');
            $table->string('police_station');
            $table->string('number_of_duty_officer');
            $table->string('gender');
            $table->string('fire_service_name')->nullable();
            $table->string('fire_service_number')->nullable();
            $table->string('Upazila_Hospital_Name')->nullable();
            $table->string('Upazila_Hospital_number')->nullable();
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
        Schema::dropIfExists('personal_infos');
    }
}

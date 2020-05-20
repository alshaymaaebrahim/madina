<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('name');
            $table->string('ssn');
            $table->string('code');
            $table->string('birthday');
            $table->string('residance');
            $table->string('address');
            $table->string('email'); 
            $table->string('mobile');
            $table->string('study_year');
            $table->string('college');
            $table->string('grade');
            $table->string('upload_Card_image');
            $table->string('upload_Photograph');
            $table->string('father_name');
            $table->string('father_relationship');
            $table->string('father_ssn');
            $table->string('father_job');
            $table->string('father_phone');
            $table->string('upload_father-Card_image');
            $table->string('gender2');
            $table->string('degree');
            $table->string('rate');
            $table->string('division'); 
            $table->string('secondary_aggregate');
            $table->string('guarantor_name');
            $table->string('guarantor_ssn');
            $table->string('guarantor_phone');
            $table->string('guarantor_job');
            $table->string('upload_guarantor_card_photo');
            $table->string('father_Monthly_income');
            $table->string('family_number');
            $table->string('buliding_name');
            $table->string('room_number');
            $table->string('message');
         
            
            
            
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
        Schema::dropIfExists('requests');
    }
}

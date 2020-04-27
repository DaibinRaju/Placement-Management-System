<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch')->nullable();
            $table->string('division')->nullable();
            $table->string('enrollment_number')->nullable();
            $table->string('student_name');
            $table->string('date_of_birth')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_mobile')->nullable();
            $table->string('gender')->nullable();
            $table->string('student_phone_no')->nullable();
            $table->string('mail_id')->nullable();
            $table->string('admission_number')->nullable();
            $table->string('barcode')->nullable();
            $table->string('university_reg_no')->nullable();
            $table->string('caste')->nullable();
            $table->string('religion')->nullable();
            $table->string('x_cgpa')->nullable();
            $table->string('x_country')->nullable();
            $table->string('x_state')->nullable();
            $table->string('x_city')->nullable();
            $table->string('x_institue')->nullable();
            $table->string('x_board')->nullable();
            $table->string('x_yop')->nullable();
            $table->string('xii_cgpa')->nullable();
            $table->string('xii_country')->nullable();
            $table->string('xii_state')->nullable();
            $table->string('xii_city')->nullable();
            $table->string('xii_institue')->nullable();
            $table->string('xii_board')->nullable();
            $table->string('xii_yop')->nullable();
            $table->string('dip_cgpa')->nullable();
            $table->string('dip_country')->nullable();
            $table->string('dip_state')->nullable();
            $table->string('dip_city')->nullable();
            $table->string('dip_university')->nullable();
            $table->string('dip_institute')->nullable();
            $table->string('dip_branch')->nullable();
            $table->string('dip_yop')->nullable();
            $table->string('bach_cgpa')->nullable();
            $table->string('bach_country')->nullable();
            $table->string('bach_state')->nullable();
            $table->string('bach_city')->nullable();
            $table->string('bach_university')->nullable();
            $table->string('bach_institute')->nullable();
            $table->string('bach_branch')->nullable();
            $table->string('bach_yop')->nullable();
            $table->string('mast_cgpa')->nullable();
            $table->string('mast_country')->nullable();
            $table->string('mast_state')->nullable();
            $table->string('mast_city')->nullable();
            $table->string('mast_university')->nullable();
            $table->string('mast_institute')->nullable();
            $table->string('mast_branch')->nullable();
            $table->string('mast_yop')->nullable();
            $table->string('hack')->nullable();
            $table->string('cert')->nullable();
            $table->boolean('complete')->default(False);
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
        Schema::dropIfExists('student_details');
    }
}

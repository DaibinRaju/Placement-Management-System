<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\FormItems;

class CreateFormItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('key');
            $table->text('code');
            $table->string('js');
            $table->timestamps();
        });

        FormItems::create(
            [
                'name' => "Branch",
                'key' => "branch",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Branch</label>
                <input type="text" id="branch" class="form-control" name="branch" placeholder="Branch" required>
                </div>
                </div>',
                'js' => 'document.getElementById("branch").value=student_detail.branch;'
            ]
        );
        FormItems::create(
            [
                'name' => "Division",
                'key' => "division",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Division</label>
                <input type="text" id="division" class="form-control" name="division" placeholder="Division" required>
                </div>
                </div>',
                'js' => 'document.getElementById("division").value=student_detail.division;'
            ]
        );
        FormItems::create(
            [
                'name' => "Enrollment number",
                'key' => "enrollment_number",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Enrollment number</label>
                <input type="text" id="enrollment_number" class="form-control" name="enrollment_number" placeholder="Enrollment number" required>
                </div>
                </div>',
                'js' => 'document.getElementById("enrollment_number").value=student_detail.enrollment_number;'
            ]
        );
        FormItems::create(
            [
                'name' => "Student name",
                'key' => "student_name",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Student name</label>
                <input type="text" id="student_name" class="form-control" name="student_name" placeholder="Student name" required>
                </div>
                </div>',
                'js' => 'document.getElementById("student_name").value=student_detail.student_name;'
            ]
        );
        FormItems::create(
            [
                'name' => "Date of birth",
                'key' => "date_of_birth",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Date of birth</label>
                <input type="text" id="date_of_birth" class="form-control" name="date_of_birth" placeholder="Date of birth" required>
                </div>
                </div>',
                'js' => 'document.getElementById("date_of_birth").value=student_detail.date_of_birth;'
            ]
        );
        FormItems::create(
            [
                'name' => "Permanent address",
                'key' => "permanent_address",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Permanent address</label>
                <input type="text" id="permanent_address" class="form-control" name="permanent_address" placeholder="Permanent address" required>
                </div>
                </div>',
                'js' => 'document.getElementById("permanent_address").value=student_detail.permanent_address;'
            ]
        );
        FormItems::create(
            [
                'name' => "Present address",
                'key' => "present_address",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Present address</label>
                <input type="text" id="present_address" class="form-control" name="present_address" placeholder="Present address" required>
                </div>
                </div>',
                'js' => 'document.getElementById("present_address").value=student_detail.present_address;'
            ]
        );
        FormItems::create(
            [
                'name' => "Phone number",
                'key' => "phone_number",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Phone number</label>
                <input type="text" id="phone_number" class="form-control" name="phone_number" placeholder="Phone number" required>
                </div>
                </div>',
                'js' => 'document.getElementById("phone_number").value=student_detail.phone_number;'
            ]
        );
        FormItems::create(
            [
                'name' => "Parent name",
                'key' => "parent_name",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Parent name</label>
                <input type="text" id="parent_name" class="form-control" name="parent_name" placeholder="Parent name" required>
                </div>
                </div>',
                'js' => 'document.getElementById("parent_name").value=student_detail.parent_name;'
            ]
        );
        FormItems::create(
            [
                'name' => "Parent mobile",
                'key' => "parent_mobile",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Parent mobile</label>
                <input type="text" id="parent_mobile" class="form-control" name="parent_mobile" placeholder="Parent mobile" required>
                </div>
                </div>',
                'js' => 'document.getElementById("parent_mobile").value=student_detail.parent_mobile;'
            ]
        );
        FormItems::create(
            [
                'name' => "Gender",
                'key' => "gender",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Gender</label>
                <input type="text" id="gender" class="form-control" name="gender" placeholder="Gender" required>
                </div>
                </div>',
                'js' => 'document.getElementById("gender").value=student_detail.gender;'
            ]
        );
        FormItems::create(
            [
                'name' => "Student phone no",
                'key' => "student_phone_no",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Student phone no</label>
                <input type="text" id="student_phone_no" class="form-control" name="student_phone_no" placeholder="Student phone no" required>
                </div>
                </div>',
                'js' => 'document.getElementById("student_phone_no").value=student_detail.student_phone_no;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mail id",
                'key' => "mail_id",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mail id</label>
                <input type="text" id="mail_id" class="form-control" name="mail_id" placeholder="Mail id" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mail_id").value=student_detail.mail_id;'
            ]
        );
        FormItems::create(
            [
                'name' => "Admission number",
                'key' => "admission_number",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Admission number</label>
                <input type="text" id="admission_number" class="form-control" name="admission_number" placeholder="Admission number" required>
                </div>
                </div>',
                'js' => 'document.getElementById("admission_number").value=student_detail.admission_number;'
            ]
        );
        FormItems::create(
            [
                'name' => "Barcode",
                'key' => "barcode",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Barcode</label>
                <input type="text" id="barcode" class="form-control" name="barcode" placeholder="Barcode" required>
                </div>
                </div>',
                'js' => 'document.getElementById("barcode").value=student_detail.barcode;'
            ]
        );
        FormItems::create(
            [
                'name' => "University reg no",
                'key' => "university_reg_no",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">University reg no</label>
                <input type="text" id="university_reg_no" class="form-control" name="university_reg_no" placeholder="University reg no" required>
                </div>
                </div>',
                'js' => 'document.getElementById("university_reg_no").value=student_detail.university_reg_no;'
            ]
        );
        FormItems::create(
            [
                'name' => "Caste",
                'key' => "caste",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Caste</label>
                <input type="text" id="caste" class="form-control" name="caste" placeholder="Caste" required>
                </div>
                </div>',
                'js' => 'document.getElementById("caste").value=student_detail.caste;'
            ]
        );
        FormItems::create(
            [
                'name' => "Religion",
                'key' => "religion",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Religion</label>
                <input type="text" id="religion" class="form-control" name="religion" placeholder="Religion" required>
                </div>
                </div>',
                'js' => 'document.getElementById("religion").value=student_detail.religion;'
            ]
        );
        FormItems::create(
            [
                'name' => "X cgpa",
                'key' => "x_cgpa",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X cgpa</label>
                <input type="text" id="x_cgpa" class="form-control" name="x_cgpa" placeholder="X cgpa" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_cgpa").value=student_detail.x_cgpa;'
            ]
        );
        FormItems::create(
            [
                'name' => "X country",
                'key' => "x_country",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X country</label>
                <input type="text" id="x_country" class="form-control" name="x_country" placeholder="X country" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_country").value=student_detail.x_country;'
            ]
        );
        FormItems::create(
            [
                'name' => "X state",
                'key' => "x_state",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X state</label>
                <input type="text" id="x_state" class="form-control" name="x_state" placeholder="X state" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_state").value=student_detail.x_state;'
            ]
        );
        FormItems::create(
            [
                'name' => "X city",
                'key' => "x_city",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X city</label>
                <input type="text" id="x_city" class="form-control" name="x_city" placeholder="X city" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_city").value=student_detail.x_city;'
            ]
        );
        FormItems::create(
            [
                'name' => "X institue",
                'key' => "x_institue",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X institue</label>
                <input type="text" id="x_institue" class="form-control" name="x_institue" placeholder="X institue" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_institue").value=student_detail.x_institue;'
            ]
        );
        FormItems::create(
            [
                'name' => "X board",
                'key' => "x_board",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X board</label>
                <input type="text" id="x_board" class="form-control" name="x_board" placeholder="X board" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_board").value=student_detail.x_board;'
            ]
        );
        FormItems::create(
            [
                'name' => "X yop",
                'key' => "x_yop",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">X yop</label>
                <input type="text" id="x_yop" class="form-control" name="x_yop" placeholder="X yop" required>
                </div>
                </div>',
                'js' => 'document.getElementById("x_yop").value=student_detail.x_yop;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii cgpa",
                'key' => "xii_cgpa",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii cgpa</label>
                <input type="text" id="xii_cgpa" class="form-control" name="xii_cgpa" placeholder="Xii cgpa" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_cgpa").value=student_detail.xii_cgpa;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii country",
                'key' => "xii_country",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii country</label>
                <input type="text" id="xii_country" class="form-control" name="xii_country" placeholder="Xii country" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_country").value=student_detail.xii_country;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii state",
                'key' => "xii_state",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii state</label>
                <input type="text" id="xii_state" class="form-control" name="xii_state" placeholder="Xii state" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_state").value=student_detail.xii_state;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii city",
                'key' => "xii_city",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii city</label>
                <input type="text" id="xii_city" class="form-control" name="xii_city" placeholder="Xii city" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_city").value=student_detail.xii_city;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii institue",
                'key' => "xii_institue",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii institue</label>
                <input type="text" id="xii_institue" class="form-control" name="xii_institue" placeholder="Xii institue" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_institue").value=student_detail.xii_institue;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii board",
                'key' => "xii_board",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii board</label>
                <input type="text" id="xii_board" class="form-control" name="xii_board" placeholder="Xii board" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_board").value=student_detail.xii_board;'
            ]
        );
        FormItems::create(
            [
                'name' => "Xii yop",
                'key' => "xii_yop",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Xii yop</label>
                <input type="text" id="xii_yop" class="form-control" name="xii_yop" placeholder="Xii yop" required>
                </div>
                </div>',
                'js' => 'document.getElementById("xii_yop").value=student_detail.xii_yop;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip cgpa",
                'key' => "dip_cgpa",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip cgpa</label>
                <input type="text" id="dip_cgpa" class="form-control" name="dip_cgpa" placeholder="Dip cgpa" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_cgpa").value=student_detail.dip_cgpa;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip country",
                'key' => "dip_country",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip country</label>
                <input type="text" id="dip_country" class="form-control" name="dip_country" placeholder="Dip country" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_country").value=student_detail.dip_country;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip state",
                'key' => "dip_state",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip state</label>
                <input type="text" id="dip_state" class="form-control" name="dip_state" placeholder="Dip state" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_state").value=student_detail.dip_state;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip city",
                'key' => "dip_city",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip city</label>
                <input type="text" id="dip_city" class="form-control" name="dip_city" placeholder="Dip city" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_city").value=student_detail.dip_city;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip university",
                'key' => "dip_university",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip university</label>
                <input type="text" id="dip_university" class="form-control" name="dip_university" placeholder="Dip university" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_university").value=student_detail.dip_university;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip institute",
                'key' => "dip_institute",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip institute</label>
                <input type="text" id="dip_institute" class="form-control" name="dip_institute" placeholder="Dip institute" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_institute").value=student_detail.dip_institute;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip branch",
                'key' => "dip_branch",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip branch</label>
                <input type="text" id="dip_branch" class="form-control" name="dip_branch" placeholder="Dip branch" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_branch").value=student_detail.dip_branch;'
            ]
        );
        FormItems::create(
            [
                'name' => "Dip yop",
                'key' => "dip_yop",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Dip yop</label>
                <input type="text" id="dip_yop" class="form-control" name="dip_yop" placeholder="Dip yop" required>
                </div>
                </div>',
                'js' => 'document.getElementById("dip_yop").value=student_detail.dip_yop;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach cgpa",
                'key' => "bach_cgpa",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach cgpa</label>
                <input type="text" id="bach_cgpa" class="form-control" name="bach_cgpa" placeholder="Bach cgpa" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_cgpa").value=student_detail.bach_cgpa;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach country",
                'key' => "bach_country",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach country</label>
                <input type="text" id="bach_country" class="form-control" name="bach_country" placeholder="Bach country" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_country").value=student_detail.bach_country;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach state",
                'key' => "bach_state",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach state</label>
                <input type="text" id="bach_state" class="form-control" name="bach_state" placeholder="Bach state" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_state").value=student_detail.bach_state;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach city",
                'key' => "bach_city",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach city</label>
                <input type="text" id="bach_city" class="form-control" name="bach_city" placeholder="Bach city" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_city").value=student_detail.bach_city;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach university",
                'key' => "bach_university",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach university</label>
                <input type="text" id="bach_university" class="form-control" name="bach_university" placeholder="Bach university" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_university").value=student_detail.bach_university;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach institute",
                'key' => "bach_institute",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach institute</label>
                <input type="text" id="bach_institute" class="form-control" name="bach_institute" placeholder="Bach institute" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_institute").value=student_detail.bach_institute;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach branch",
                'key' => "bach_branch",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach branch</label>
                <input type="text" id="bach_branch" class="form-control" name="bach_branch" placeholder="Bach branch" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_branch").value=student_detail.bach_branch;'
            ]
        );
        FormItems::create(
            [
                'name' => "Bach yop",
                'key' => "bach_yop",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Bach yop</label>
                <input type="text" id="bach_yop" class="form-control" name="bach_yop" placeholder="Bach yop" required>
                </div>
                </div>',
                'js' => 'document.getElementById("bach_yop").value=student_detail.bach_yop;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast cgpa",
                'key' => "mast_cgpa",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast cgpa</label>
                <input type="text" id="mast_cgpa" class="form-control" name="mast_cgpa" placeholder="Mast cgpa" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_cgpa").value=student_detail.mast_cgpa;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast country",
                'key' => "mast_country",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast country</label>
                <input type="text" id="mast_country" class="form-control" name="mast_country" placeholder="Mast country" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_country").value=student_detail.mast_country;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast state",
                'key' => "mast_state",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast state</label>
                <input type="text" id="mast_state" class="form-control" name="mast_state" placeholder="Mast state" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_state").value=student_detail.mast_state;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast city",
                'key' => "mast_city",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast city</label>
                <input type="text" id="mast_city" class="form-control" name="mast_city" placeholder="Mast city" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_city").value=student_detail.mast_city;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast university",
                'key' => "mast_university",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast university</label>
                <input type="text" id="mast_university" class="form-control" name="mast_university" placeholder="Mast university" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_university").value=student_detail.mast_university;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast institute",
                'key' => "mast_institute",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast institute</label>
                <input type="text" id="mast_institute" class="form-control" name="mast_institute" placeholder="Mast institute" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_institute").value=student_detail.mast_institute;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast branch",
                'key' => "mast_branch",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast branch</label>
                <input type="text" id="mast_branch" class="form-control" name="mast_branch" placeholder="Mast branch" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_branch").value=student_detail.mast_branch;'
            ]
        );
        FormItems::create(
            [
                'name' => "Mast yop",
                'key' => "mast_yop",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Mast yop</label>
                <input type="text" id="mast_yop" class="form-control" name="mast_yop" placeholder="Mast yop" required>
                </div>
                </div>',
                'js' => 'document.getElementById("mast_yop").value=student_detail.mast_yop;'
            ]
        );
        FormItems::create(
            [
                'name' => "Hack",
                'key' => "hack",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Hack</label>
                <input type="text" id="hack" class="form-control" name="hack" placeholder="Hack" required>
                </div>
                </div>',
                'js' => 'document.getElementById("hack").value=student_detail.hack;'
            ]
        );
        FormItems::create(
            [
                'name' => "Cert",
                'key' => "cert",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Cert</label>
                <input type="text" id="cert" class="form-control" name="cert" placeholder="Cert" required>
                </div>
                </div>',
                'js' => 'document.getElementById("cert").value=student_detail.cert;'
            ]
        );
        FormItems::create(
            [
                'name' => "Complete",
                'key' => "complete",
                'code' => '<div class="col-md-12">
                <div class="form-group">
                <label class="form-label">Complete</label>
                <input type="text" id="complete" class="form-control" name="complete" placeholder="Complete" required>
                </div>
                </div>',
                'js' => 'document.getElementById("complete").value=student_detail.complete;'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_items');
    }
}

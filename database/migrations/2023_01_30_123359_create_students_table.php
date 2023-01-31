<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name', 50);
            $table->string('student_type', 50);
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('section_id');
            $table->string('registration_no', 50);
            $table->string('roll_no', 50);
            $table->string('gender', 50);
            $table->date('admitted_date');
            $table->date('dob_ad');
            $table->date('dob_bs');
            $table->string('phone', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('address', 50);
            $table->string('blood_group', 50);
            $table->string('disability', 50);
            $table->string('caste', 50);
            $table->string('religion', 50);
            $table->string('previous_school', 100);
            $table->string('ecd_type', 50);
            $table->string('ecd_no', 50);
            $table->string('ecd_ppc_experience',5);
            $table->string('new_admission_status',5);
            $table->string('photo', 255);
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
        Schema::dropIfExists('students');
    }
};

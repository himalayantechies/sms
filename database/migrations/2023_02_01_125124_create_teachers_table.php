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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('teacher_type')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('issuing_district')->nullable();
            $table->date('dob')->nullable();
            $table->string('teaching_medium')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('caste')->nullable();
            $table->string('disability')->nullable();
            $table->string('designation')->nullable();
            $table->string('responsibility')->nullable();
            $table->date('join_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('will_person')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};

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
        Schema::create('student_fee_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->integer('total_amount');
            $table->integer('class_id');
            $table->integer('student_id');
            $table->integer('parent_id')->nullable();
            $table->string('payment_method',255)->nullable();
            $table->integer('paid_amount');
            $table->string('status',255);
            $table->integer('school_id');
            $table->integer('session_id');
            $table->integer('timestamp');
            $table->string('document_image',255)->nullable();
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
        Schema::dropIfExists('student_fee_managers');
    }
};

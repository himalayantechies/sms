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
        Schema::create('gradebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->integer('section_id');
            $table->integer('student_id');
            $table->integer('exam_category_id');
            $table->string('marks',255)->nullable();
            $table->string('comment', 255);
            $table->integer('school_id');
            $table->integer('session_id');
            $table->integer('timestamp');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gradebooks');
    }
};

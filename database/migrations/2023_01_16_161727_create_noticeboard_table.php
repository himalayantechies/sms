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
        Schema::create('noticeboard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('notice_title');    
            $table->longText('notice');    
            $table->string('start_date',255)->nullable();    
            $table->string('start_time',255)->nullable();    
            $table->string('end_date',255)->nullable();
            $table->string('end_time',255)->nullable();    
            $table->integer('status');
            $table->integer('show_on_website');
            $table->string('image',255)->nullable();    
            $table->integer('school_id');
            $table->integer('session_id');
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
        Schema::dropIfExists('noticeboard');
    }
};

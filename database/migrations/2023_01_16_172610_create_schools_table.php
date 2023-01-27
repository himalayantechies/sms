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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('school_info',255)->nullable();
            $table->integer('status');
            $table->integer('running_session')->nullable();
            $table->string('school_currency',255)->nullable();;
            $table->string('currency_position',255)->nullable();;
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
        Schema::dropIfExists('schools');
    }
};

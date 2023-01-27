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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('email',255);
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role_id')->nullable();;
            $table->integer('parent_id')->nullable();;
            $table->integer('school_id')->nullable();;
            $table->string('password',255);
            $table->string('code',255)->nullable();
            $table->longText('user_information')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('designation',255)->nullable();
            $table->string('remember_token',100)->nullable();
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
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('payment_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_type',255)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->float('amount')->nullable();
            $table->integer('school_id')->nullable();
            $table->longText('transaction_keys')->nullable();
            $table->string('document_image',255)->nullable();
            $table->string('paid_by',255)->nullable();
            $table->string('status',255)->nullable();
            $table->integer('timestamp')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_history');
    }
};

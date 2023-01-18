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
        Schema::create('addons', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('features',255)->nullable();
            $table->float('version',8,2)->nullable();
            $table->string('purchase_code',255)->nullable();
            $table->string('unique_identifier',255);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addons');
    }
};

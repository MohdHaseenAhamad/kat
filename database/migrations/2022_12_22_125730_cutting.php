<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cutting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutting',function(Blueprint $table) {
            $table->id();
            $table->integer('operater_id');
            $table->string('shift');
            $table->string('batch_number')->nullable();
            $table->string('side_plate_no')->nullable();
            $table->string('timing')->nullable();
            $table->string('size')->nullable();
            $table->string('cracks')->nullable();
            $table->string('chipping')->nullable();
            $table->string('heavy_line')->nullable();
            $table->string('corner_damage')->nullable();
            $table->string('top_layer')->nullable();
            $table->string('tilting_damage')->nullable();
            $table->string('less_raising')->nullable();
            $table->string('scrap_layer')->nullable();
            $table->string('uncutt_blocks')->nullable();
            $table->string('total_reject_block')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

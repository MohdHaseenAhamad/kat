<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Flow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flow',function(Blueprint $table) {
            $table->id();
            $table->integer('operater_id');
            $table->integer('helper_if');
            $table->string('shift');
            $table->string('casting_number')->nullable();
            $table->string('mould_no')->nullable();
            $table->string('side_plate_no')->nullable();
            $table->string('discharge_time')->nullable();
            $table->string('flow')->nullable();
            $table->string('empty_height')->nullable();
            $table->string('temprator')->nullable();
            $table->string('remark')->nullable();
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

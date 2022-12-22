<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Raising extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raising',function(Blueprint $table) {
            $table->id();
            $table->integer('operater_id');
            $table->string('shift');
            $table->string('batch_number')->nullable();
            $table->string('mould_no')->nullable();
            $table->string('discharge_time')->nullable();
            $table->string('hardness')->nullable();
            $table->string('cutting_time')->nullable();
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

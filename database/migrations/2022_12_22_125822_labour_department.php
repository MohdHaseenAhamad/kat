<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabourDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour',function(Blueprint $table) {
            $table->id();
            $table->string('shift')->nullable();
            $table->integer('labour_id');
            $table->string('area_of_work')->nullable();
            $table->integer('contractor_id');
            $table->integer('operater_id');
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

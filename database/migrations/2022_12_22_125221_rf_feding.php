<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RfFeding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rf_feding',function(Blueprint $table)
        {
            $table->id();
            $table->integer('store_incharge_id');
            $table->string('shift');
            $table->string('fly_ash_bulker')->nullable();
            $table->string('fly_ash_bulker')->nullable();
            $table->string('cement_bulker')->nullable();
            $table->string('cement_bag')->nullable();
            $table->string('gypsum')->nullable();
            $table->string('lime_bulker')->nullable();
            $table->string('lime_bag')->nullable();
            $table->string('aluminium')->nullable();
            $table->string('husk')->nullable();
            $table->string('soluble')->nullable();
            $table->string('moud_oil')->nullable();
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
        //
    }
}

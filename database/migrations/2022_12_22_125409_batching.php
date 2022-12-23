<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Batching extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batching',function(Blueprint $table) {
            $table->id();
            $table->integer('operater_id');
            $table->string('shift');
            $table->string('slide_plate')->nullable();
            $table->string('flow_and_height')->nullable();
            $table->string('f_slurry')->nullable();
            $table->string('cement')->nullable();
            $table->string('lime')->nullable();
            $table->string('gypsum')->nullable();
            $table->string('aluminium_powder')->nullable();
            $table->string('extra_water')->nullable();
            $table->string('husk')->nullable();
            $table->string('s_oil')->nullable();
            $table->string('discharge_temp')->nullable();
            $table->string('discharge_time')->nullable();
            $table->string('mixing_time')->nullable();
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
        Schema::dropIfExists('batching');
    }
}

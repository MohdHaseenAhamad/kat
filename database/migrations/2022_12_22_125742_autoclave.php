<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Autoclave extends Migration
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
            $table->string('autoclave_number')->nullable();
            $table->integer('operater_id');
            $table->string('shift')->nullable();
            $table->string('casting_number')->nullable();
            $table->string('material_receipt')->nullable();
            $table->string('door_closing')->nullable();
            $table->string('vacuum_time')->nullable();
            $table->string('rising_time')->nullable();
            $table->string('pressure')->nullable();
            $table->string('temp')->nullable();
            $table->string('release_time')->nullable();
            $table->string('door_opening')->nullable();
            $table->string('stream_transfer')->nullable();
            $table->string('transfer_to')->nullable();
            $table->string('time_stream_transfer')->nullable();
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

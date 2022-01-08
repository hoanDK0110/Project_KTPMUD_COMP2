<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateMonitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor', function (Blueprint $table) {
            $table->increments('monitor_id');
            $table->string('monitor_name');
            $table->string('monitor_brand');
            $table->integer('monitor_price');
            $table->string('monitor_resolution');
            $table->string('monitor_size');
            $table->string('monitor_hz');
            $table->string('monitor_bp');
            $table->string('monitor_face');
            $table->text('monitor_desc');
            $table->string('monitor_image');
            $table->text('monitor_spec');
            $table->integer('monitor_status');
           
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
        Schema::dropIfExists('monitor');
    }
}

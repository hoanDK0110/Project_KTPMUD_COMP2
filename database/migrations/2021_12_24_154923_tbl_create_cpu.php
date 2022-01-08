<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateCpu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->increments('cpu_id');
            $table->string('cpu_name');
            $table->string('cpu_brand');
            $table->integer('cpu_price');
            $table->string('cpu_core');
            $table->string('cpu_thread');
            $table->string('cpu_type');
            $table->text('cpu_desc');
            $table->string('cpu_image');
            $table->text('cpu_spec');
            $table->integer('cpu_status');
            
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
        Schema::dropIfExists('cpu');
    }
}

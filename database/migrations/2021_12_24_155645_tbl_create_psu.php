<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreatePsu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psu', function (Blueprint $table) {
            $table->increments('psu_id');
            $table->string('psu_name');
            $table->string('psu_brand');
            $table->integer('psu_price');
            $table->string('psu_wattage');
            $table->string('psu_type');
            $table->text('psu_desc');
            $table->string('psu_image');
            $table->text('psu_spec');
            $table->integer('psu_status');
         
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
        Schema::dropIfExists('psu');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateMainboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainboard', function (Blueprint $table) {
            $table->increments('mainboard_id');
            $table->string('mainboard_name');
            $table->string('mainboard_type');
            $table->string('mainboard_brand');
            $table->integer('mainboard_price');
            $table->string('mainboard_chipset');
            $table->string('mainboard_size'); 
            $table->text('mainboard_desc');
            $table->string('mainboard_image');
            $table->text('mainboard_spec');
            $table->integer('mainboard_status');
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
        Schema::dropIfExists('mainboard');
    }
}

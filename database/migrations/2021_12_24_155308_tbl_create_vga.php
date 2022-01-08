<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateVga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vga', function (Blueprint $table) {
            $table->increments('vga_id');
            $table->string('vga_name');
            $table->string('vga_chipset');
            $table->string('vga_brand');
            $table->integer('vga_price');
            $table->string('vga_gpu');
            $table->string('vga_memory');
            $table->text('vga_desc');
            $table->string('vga_image');
            $table->text('vga_spec');
            $table->integer('vga_status');
           
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
        Schema::dropIfExists('vga');
    }
}

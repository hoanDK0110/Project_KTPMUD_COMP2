<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateLaptop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('laptop_id');
            $table->string('laptop_name');
            $table->string('laptop_brand');
            $table->integer('laptop_price');
            $table->string('laptop_cpu');
            $table->string('laptop_ram');
            $table->string('laptop_vga');
            $table->string('laptop_monitor');
            $table->string('laptop_memory');
            $table->text('laptop_desc');
            $table->string('laptop_image');
            $table->text('laptop_spec');
            $table->integer('laptop_status');
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
        Schema::dropIfExists('laptop');
    }
}

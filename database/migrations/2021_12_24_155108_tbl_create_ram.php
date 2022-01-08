<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateRam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->increments('ram_id');
            $table->string('ram_name');
            $table->string('ram_brand');
            $table->integer('ram_price');
            $table->string('ram_memory');
            $table->string('ram_type');
            $table->string('ram_bus');
            $table->text('ram_desc');
            $table->string('ram_image');
            $table->text('ram_spec');
            $table->integer('ram_status');
            
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
        Schema::dropIfExists('ram');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateCooling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooling', function (Blueprint $table) {
            $table->increments('cooling_id');
            $table->string('cooling_name');
            $table->string('cooling_brand');
            $table->integer('cooling_price');
            $table->string('cooling_type');
            $table->string('cooling_socket');
            $table->text('cooling_desc');
            $table->string('cooling_image');
            $table->text('cooling_spec');
            $table->integer('cooling_status');
          
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
        Schema::dropIfExists('cooling');
    }
}

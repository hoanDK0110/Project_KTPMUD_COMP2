<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateGrear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grear', function (Blueprint $table) {
            $table->increments('grear_id');
            $table->string('grear_type');
            $table->string('grear_name');
            $table->string('grear_brand');
            $table->integer('grear_price');
            $table->text('grear_desc');
            $table->string('grear_image');
            $table->text('grear_spec');
            $table->integer('grear_status');
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
        Schema::dropIfExists('grear');
    }
}

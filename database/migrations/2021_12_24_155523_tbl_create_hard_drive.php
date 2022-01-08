<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateHardDrive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hard_drive', function (Blueprint $table) {
            $table->increments('hd_id');
            $table->string('hd_name');
            $table->string('hd_brand');
            $table->integer('hd_price');
            $table->string('hd_type');
            $table->string('hd_memory');
            $table->text('hd_desc');
            $table->string('hd_image');
            $table->text('hd_spec');
            $table->integer('hd_status');
            
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
        Schema::dropIfExists('hard_drive');
    }
}

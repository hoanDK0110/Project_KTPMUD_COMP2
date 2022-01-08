<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCreateCase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case', function (Blueprint $table) {
            $table->increments('case_id');
            $table->string('case_name');
            $table->string('case_brand');
            $table->integer('case_price');
            $table->string('case_mainboard');
            $table->text('case_desc');
            $table->string('case_image');
            $table->text('case_spec');
            $table->integer('case_status');
          
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
        Schema::dropIfExists('case');
    }
}

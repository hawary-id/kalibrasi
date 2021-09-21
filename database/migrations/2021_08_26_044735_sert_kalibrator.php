<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SertKalibrator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sert_kalibrator',function(Blueprint $table){
            $table->increments('id');
            $table->integer('kalibrator_id');
            $table->date('sert_tgl');
            $table->string('sert_img');
            $table->boolean('sert_sts');
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
        //
    }
}

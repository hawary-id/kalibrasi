<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kalibrator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalibrator',function(Blueprint $table){
            $table->increments('id');
            $table->char('klb_nama',50);
            $table->char('klb_merk',50);
            $table->char('klb_seri',50);
            $table->char('klb_capacity',50);
            $table->date('klb_datang');
            $table->integer('klb_period');
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

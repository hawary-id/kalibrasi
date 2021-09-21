<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KalibratorDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalibrator_detail',function(Blueprint $table){
            $table->increments('id');
            $table->integer('kalibrator_id');
            $table->integer('kalibrator_nominal');
            $table->decimal('kalibrator_cor',2,1);
            $table->integer('kalibrator_u95');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat', function (Blueprint $table) {
            $table->increments('alt_id');
            $table->string('alt_kode',7);
            $table->string('alt_merk',20);
            $table->string('alt_seri',50);
            $table->integer('alt_rentang');
            $table->decimal('alt_res',4,3);
            $table->date('alt_tgl');
            $table->integer('alt_div');
            $table->integer('alt_ktg');
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
        Schema::dropIfExists('users');
    }
}

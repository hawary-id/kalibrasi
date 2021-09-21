<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $dates = ['jdw_tgl','jdw_kal'];
    protected $fillable = ['alat_id','jdw_tgl','jdw_sts','jdw_kal'];
    public function alat(){
        return $this->belongsTo('App\Alat');
    }
}

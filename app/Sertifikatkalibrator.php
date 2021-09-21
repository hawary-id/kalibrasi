<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikatkalibrator extends Model
{
    protected $table="sert_kalibrator";
    protected $fillable=['kalibrator_id','sert_tgl','sert_file','sert_sts'];

    public function kalibrator(){
        return $this->hasMany('App\Kalibrator');
    }
}

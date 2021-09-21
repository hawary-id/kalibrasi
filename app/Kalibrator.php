<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalibrator extends Model
{
    protected $table="kalibrator";
    protected $fillable=['klb_nama','klb_merk','klb_seri','klb_capacity','klb_datang','klb_period','klb_img','klb_model'];

    public function kalibratordetail(){
        return $this->belongsTo('App\Kalibratordetail');
    }

    public function sertifikatkalibrator(){
        return $this->belongsTo('App\Sertifikatkalibrator');
    }
}

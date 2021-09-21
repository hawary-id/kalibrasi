<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalibratordetail extends Model
{
    protected $table ="kalibrator_detail";
    protected $fillable =['kalibrator_id','kalibrator_nominal','kalibrator_cor'];

    public function kalibrator(){
        return $this->hasMany('App\Kalibrator');
    }
}

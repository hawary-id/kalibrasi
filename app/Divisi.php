<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table ="divisi";
    public function alat(){
        return $this->hasMany('App\Alat');
    }
}

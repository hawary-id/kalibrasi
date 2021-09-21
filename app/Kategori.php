<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table="kategori";
    protected $fillable = ['ktg_nama','ktg_kode','ktg_img','ktg_period','ktg_klb'];
    public function alat(){
        return $this->hasMany('App\Alat');
    }
}

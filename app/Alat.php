<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Alat extends Model
{
    protected $table = "alat";
    protected $fillable = ['alt_kode','alt_merk','alt_seri','alt_rentang','alt_res','alt_tgl','divisi_id','kategori_id'];
 
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
    public function divisi(){
        return $this->belongsTo('App\Divisi');
    }

    public function jadwal(){
        return $this->hasMany('App\Jadwal');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alat;
use App\Kategori;
use App\Divisi;
use App\Kalibrator;

class NavController extends Controller
{
    public function home(){
        $alat=Alat::all();
        return view ('home',['alat'=>$alat]);
    }

    public function alat(){
        $alat=Alat::all();
        $kategori=Kategori::all();
        $divisi=Divisi::all();
        return view ('alat',['alat'=>$alat,'kategori'=>$kategori,'divisi'=>$divisi]);
    }

    public function kategori(){
        $alat=Alat::all();
        $kategori=Kategori::all();
        return view ('kategori',['alat'=>$alat,'kategori'=>$kategori]);
    }

    public function kalibrator(){
        $alat=Alat::all();
        $kalibrator = Kalibrator::all();
        return view('kalibrator',['alat'=>$alat,'kalibrator'=>$kalibrator]);
    }
}

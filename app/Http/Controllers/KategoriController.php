<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Alat;
use App\Kalibrator;
class KategoriController extends Controller
{
    public function tambah(){
        $alat=Alat::all();
        $kalibrator=Kalibrator::all();
        return view ('kategori_tambah',['alat'=>$alat,'kalibrator'=>$kalibrator]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'kode'=>'required',
            'periode'=>'required',
            'foto' => 'required|mimes:jpg,png|max:2048',
        ]);
        $nama = Kategori::where('ktg_nama',$request->nama)->count();

        if($nama==1){
            return back()->with('error','Nama kategori sudah terdaftar!'); 
        }else{
            Kategori::create([
                'ktg_nama'=>$request->nama,
                'ktg_kode'=>$request->kode,
                'ktg_period'=>$request->periode,
                'ktg_img'=>$request->foto,
            ]);
            return redirect('/kategori')->with('success','Berhasil Disimpan!');
        }
    }
}

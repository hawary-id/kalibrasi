<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kalibrator;
use App\Alat;
use App\Kalibratordetail;
use App\Sertifikatkalibrator;
use File;

class KalibratorController extends Controller
{
    public function tambah(){
        $alat=Alat::all();
        return view('kalibrator_tambah',['alat'=>$alat]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'merk'=>'required',
            'model'=>'required',
            'seri'=>'required',
            'capacity'=>'required',
            'datang'=>'required',
            'periode'=>'required',
            'foto'=>'required',
            'sert'=>'required',
            'tglsert'=>'required',
        ]);
        $seri = Kalibrator::where('klb_seri',$request->seri)->count();
        if($seri==1){
            return back()->with('error','Nomor seri sudah terdaftar!');  
        }else{
            $file = $request->file('foto');
            $src='images/kalibrator/';
            $file->move($src,$file->getClientOriginalName());

            $input=[
                'klb_nama'=>$request->nama,
                'klb_merk'=>$request->merk,
                'klb_model'=>$request->model,
                'klb_seri'=>$request->seri,
                'klb_capacity'=>$request->capacity,
                'klb_datang'=>$request->datang,
                'klb_period'=>$request->periode,
                'klb_img'=>$file->getClientOriginalName(),
            ];
            $kalibrator=Kalibrator::create($input);
            $sert = $request->file('sert');
            $src2='sertifikat/kalibrator/';
            $sert->move($src2,$sert->getClientOriginalName());
            
            Sertifikatkalibrator::create([
                'kalibrator_id'=>$kalibrator->id,
                'sert_tgl'=>$request->tglsert,
                'sert_file'=>$sert->getClientOriginalName(),
                'sert_sts'=>'1',
            ]);

            $num=$request->num;
            for($a=0;$a<$num;$a++){
                $nominal=$request->nominal[$a];
                $koreksi=$request->koreksi[$a];

                Kalibratordetail::create([
                    'kalibrator_id'=>$kalibrator->id,
                    'kalibrator_nominal'=>$nominal,
                    'kalibrator_cor'=>$koreksi,
                ]);
            }
            return redirect('/kalibrator')->with('success','Berhasil disimpan'); 
        }
    }
    public function hapus($id){
        $kalibrator=Kalibrator::where('id',$id)->get();
        foreach($kalibrator as $kal)
        $imgkal = $kal->klb_img;
        File::delete('images/kalibrator/'.$imgkal);

        $sertifikat=Sertifikatkalibrator::where('kalibrator_id',$id)->get();
        foreach($sertifikat as $sertifikat)
        $imgsert = $sertifikat->sert_file;
        File::delete('sertifikat/kalibrator/'.$imgsert);

        Kalibrator::where('id',$id)->delete();
        Kalibratordetail::where('kalibrator_id',$id)->delete();
        Sertifikatkalibrator::where('kalibrator_id',$id)->delete();

        return redirect('/kalibrator')->with('success','Berhasil Dihapus!');
    }

    public function edit($id){
        $alat=Alat::all();
        $kalibrator = Kalibrator::find($id);
        return view('kalibrator_edit',['kalibrator'=>$kalibrator,'alat'=>$alat]);
    }
}

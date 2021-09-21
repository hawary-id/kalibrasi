<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alat;
use App\Kategori;
use App\Divisi;
use App\Jadwal;
use Carbon\Carbon;
class AlatController extends Controller
{
    public function tambah(){
        $kategori=Kategori::all();
        $divisi=Divisi::all();
        $alat=Alat::all();
        return view ('alat_tambah',['kategori'=>$kategori,'divisi'=>$divisi,'alat'=>$alat]);
    }
    public function hapus($id){
        Alat::where('id',$id)->delete();
        return redirect('/alat')->with('success','Berhasil Dihapus!');
    }

    public function store(Request $request){
        $this->validate($request,[
            'tgl'=>'required',
            'merk'=>'required',
            'seri'=>'required',
            'rentang'=>'required',
            'resolusi'=>'required|numeric'
        ]);
        $seri = Alat::where('alt_seri',$request->seri)->count();
        if($seri==1){
            return back()->with('error','Nomor seri sudah terdaftar!'); 
        }else{
            $max = Alat::where('kategori_id',$request->kategori)
            ->orderBy('id','DESC')
            ->limit(1)
            ->get();
            $count = Alat::where('kategori_id',$request->kategori)
            ->orderBy('id','DESC')
            ->limit(1)
            ->count();
            foreach($max as $max)
            $kode=$max->alt_kode;
            if($count<1){
                $baru=1;
            }else{
                $baru=$kode+1;
            }
            $input=[
                'alt_kode'=>$baru,
                'alt_merk'=>$request->merk,
                'alt_seri'=>$request->seri,
                'alt_rentang'=>$request->rentang,
                'alt_res'=>$request->resolusi,
                'alt_tgl'=>$request->tgl,
                'divisi_id'=>$request->divisi,
                'kategori_id'=>$request->kategori,
            ];
            $alat=Alat::create($input);
            $jadwal = \Carbon\Carbon::parse($request->tgl)->addMonth(6);
            Jadwal::create([
                'alat_id'=>$alat->id,
                'jdw_tgl'=>$jadwal,
                'jdw_kal'=>date('Y-m-d',0000-00-00),
                'jdw_sts'=>0,
            ]);
            return redirect('/alat')->with('success','Berhasil Disimpan!');
        }
    }

    public function edit($id){
        $alat = Alat::find($id);
        $kategori = Kategori::where('id','!=',$alat->kategori->id)->get();
        $div = $alat->divisi_id;
        $divisi=Divisi::where('id','!=',$alat->divisi->id)->get();
        return view('alat_edit',['alat'=>$alat,'kategori'=>$kategori,'divisi'=>$divisi]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'tgl'=>'required',
            'merk'=>'required',
            'seri'=>'required',
            'rentang'=>'required',
            'resolusi'=>'required|numeric'
        ]);
        $seri = Alat::where([['id','<>',$id],['alt_seri',$request->seri]])
        ->count();

        if($seri>0){
            return back()->with('error','Nomor seri sudah terdaftar!'); 
        }else{
            $seri = Alat::where([['id',$id],['alt_seri',$request->seri],['alt_merk',$request->merk],['alt_rentang',$request->rentang],['alt_res',$request->resolusi],['alt_tgl',$request->tgl],['divisi_id',$request->divisi]])
            ->count();
            if($seri==1){
                return redirect('/alat')->with('error','Data alat tidak diubah!'); 
            }else{
                $alat=Alat::find($id);
                $alat->alt_merk = $request->merk;
                $alat->alt_seri = $request->seri;
                $alat->alt_rentang = $request->rentang;
                $alat->alt_res = $request->resolusi;
                $alat->alt_tgl = $request->tgl;
                $alat->divisi_id = $request->divisi;
                $alat->save();
                return redirect('/alat')->with('success','Berhasil Diubah!');
            }
        }
    }
}

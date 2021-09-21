<!-- header -->
@extends('header') 
<!-- Konten -->
@section('konten')
<main>
    <div class="py-1 bg-light">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-2 d-flex justify-content-end">
                    <li class="breadcrumb-item" aria-current="page"><a href="/">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="/alat">Alat</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Alat</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">
            <div class="col-12">       
                <a class="btn btn-outline-danger my-2" href="/alat"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
            </div>               
            <div class="col-md-9 col-12 mb-3">
                @include('flash-message')
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Alat Ukur Baru
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <form action="/alat/update/{{$alat->id}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="mb-3">
                                            <label for="kode" class="form-label">Kode Alat</label>
                                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode..." value="{{$alat->kategori->ktg_kode}}{{sprintf('%03s',$alat->alt_kode)}}" required readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori Alat</label>
                                            <select class="form-select" name="kategori" id="kategori" disabled>
                                            <option value="{{$alat->kategori->id}}" selected>{{$alat->kategori->ktg_nama}}</option>
                                                @foreach($kategori as $k)
                                                    <option value="{{$k->id}}">{{$k->ktg_nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="divisi" class="form-label">Divisi Alat</label>
                                            <select class="form-select" name="divisi" id="divisi">
                                            <option value="{{$alat->divisi->id}}" selected>{{$alat->divisi->div_nama}}</option>
                                                @foreach($divisi as $d)
                                                    <option value="{{$d->id}}">{{$d->div_nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl" class="form-label">Tgl Datang</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Resolusi..." value="{{ $alat2->alt_tgl }}" required>
                                            @if($errors->has('tgl'))
                                                <div class="text-danger">
                                                    {{ $errors->first('tgl')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="mb-3">
                                            <label for="merk" class="form-label">Merk</label>
                                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk..." value="{{ $alat2->alt_merk }}" required>
                                            @if($errors->has('merk'))
                                                <div class="text-danger">
                                                    {{ $errors->first('merk')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="seri" class="form-label">No Seri</label>
                                            <input type="text" class="form-control" id="seri" name="seri" placeholder="No. Seri..." value="{{ $alat2->alt_seri }}" required>
                                            @if($errors->has('seri'))
                                                <div class="text-danger">
                                                    {{ $errors->first('seri')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="rentang" class="form-label">Rentang</label>
                                            <input type="text" class="form-control" id="rentang" name="rentang" placeholder="Rentang..." value="{{ $alat2->alt_rentang }}" required>
                                            @if($errors->has('rentang'))
                                                <div class="text-danger">
                                                    {{ $errors->first('rentang')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="resolusi" class="form-label">Resolusi</label>
                                            <input type="text" class="form-control" id="resolusi" name="resolusi" placeholder="Resolusi..." value="{{ $alat2->alt_res }}" required>
                                            @if($errors->has('resolusi'))
                                                <div class="text-danger">
                                                    {{ $errors->first('resolusi')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary float-end" value="Simpan">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('rightbar')
        </div>
    </div>
</main> 
@endsection
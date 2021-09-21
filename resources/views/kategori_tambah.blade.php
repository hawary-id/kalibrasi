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
                    <li class="breadcrumb-item" aria-current="page"><a href="/kategori">Kategori</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori Baru</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">
            <div class="col-12">       
                <a class="btn btn-outline-danger my-2" href="/kategori"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
            </div>               
            <div class="col-md-9 col-12 mb-3">
                @include('flash-message')
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Kategori Baru
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <form action="/kategori/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Kategori</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." value="{{ old('nama') }}" required>
                                            @if($errors->has('nama'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode" class="form-label">Kode Kategori</label>
                                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode..." value="{{ old('kode') }}" required>
                                            @if($errors->has('kode'))
                                                <div class="text-danger">
                                                    {{ $errors->first('kode')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="periode" class="form-label">periode Kategori (bulan)</label>
                                            <input type="number" class="form-control" id="periode" name="periode" placeholder="Periode..." value="{{ old('periode') }}" required>
                                            @if($errors->has('periode'))
                                                <div class="text-danger">
                                                    {{ $errors->first('periode')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="kalibrator" class="form-label">Kalibrator Alat</label>
                                            <select class="form-select" name="kalibrator" id="kalibrator" required>
                                                <option value="">Pilih Kalibrator</option>
                                                @foreach($kalibrator as $k)
                                                    <option value="{{$k->id}}">{{$k->klb_nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                        <label for="foto" class="form-label">Foto Kategori</label>
                                        <input class="form-control" type="file" id="foto" name="foto" value="{{ old('foto') }}">
                                            @if($errors->has('foto'))
                                                <div class="text-danger">
                                                    {{ $errors->first('foto')}}
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
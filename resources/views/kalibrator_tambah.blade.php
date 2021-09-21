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
                    <li class="breadcrumb-item" aria-current="page"><a href="/kalibrator">Kalibrator</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kalibrator Baru</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">
            <div class="col-12">       
                <a class="btn btn-outline-danger my-2" href="/kalibrator"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
            </div>               
            <div class="col-md-9 col-12 mb-3">
                @include('flash-message')
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Kalibrator Baru
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <form action="/kalibrator/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Kalibrator</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." value="{{ old('nama') }}" required>
                                            @if($errors->has('nama'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="merk" class="form-label">Merk</label>
                                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk..." value="{{ old('merk') }}" required>
                                            @if($errors->has('merk'))
                                                <div class="text-danger">
                                                    {{ $errors->first('merk')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="model" class="form-label">Model</label>
                                            <input type="text" class="form-control" id="model" name="model" placeholder="Model..." value="{{ old('model') }}" required>
                                            @if($errors->has('model'))
                                                <div class="text-danger">
                                                    {{ $errors->first('model')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="seri" class="form-label">Seri</label>
                                            <input type="text" class="form-control" id="seri" name="seri" placeholder="Seri..." value="{{ old('seri') }}" required>
                                            @if($errors->has('seri'))
                                                <div class="text-danger">
                                                    {{ $errors->first('seri')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="capacity" class="form-label">Capacity</label>
                                            <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity..." value="{{ old('capacity') }}" required>
                                            @if($errors->has('capacity'))
                                                <div class="text-danger">
                                                    {{ $errors->first('capacity')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="datang" class="form-label">Tgl. Datang</label>
                                            <input type="date" class="form-control" id="datang" name="datang" value="{{ old('datang') }}" required>
                                            @if($errors->has('datang'))
                                                <div class="text-danger">
                                                    {{ $errors->first('datang')}}
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="periode" class="form-label">periode kalibrasi (bulan)</label>
                                            <input type="number" class="form-control" id="periode" name="periode" placeholder="Periode..." value="{{ old('periode') }}" required>
                                            @if($errors->has('periode'))
                                                <div class="text-danger">
                                                    {{ $errors->first('periode')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto Kalibrator</label>
                                            <input class="form-control" type="file" id="foto" name="foto" value="{{ old('foto') }}" required>
                                            @if($errors->has('foto'))
                                                <div class="text-danger">
                                                    {{ $errors->first('foto')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="sert" class="form-label">Sertifikat Kalibrator</label>
                                            <input class="form-control" type="file" id="sert" name="sert" value="{{ old('sert') }}" required>
                                            @if($errors->has('sert'))
                                                <div class="text-danger">
                                                    {{ $errors->first('sert')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="tglsert" class="form-label">Tgl. Sertifikat</label>
                                            <input type="date" class="form-control" id="tglsert" name="tglsert" value="{{ old('tglsert') }}" required>
                                            @if($errors->has('tglsert'))
                                                <div class="text-danger">
                                                    {{ $errors->first('tglsert')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8">
                                        <input type="hidden" name="num" id="num" value="1">
                                        <div class="detail">
                                            <div class="row">                                    
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="nominal" class="form-label">Nominal</label>
                                                        <input type="text" class="form-control" id="nominal[]" name="nominal[]" placeholder="Nominal..." value="{{ old('nominal') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="koreksi" class="form-label">Koreksi</label>
                                                        <input type="text" class="form-control" id="koreksi[]" name="koreksi[]" placeholder="Koreksi..." value="{{ old('koreksi') }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group float-end">
                                            <btn class="btn btn-outline-success" name="add" id="add"><i class="bi bi-plus-lg"></i> Nominal</btn>
                                            <input type="submit" class="btn btn-primary" value="Simpan">
                                        </div>
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
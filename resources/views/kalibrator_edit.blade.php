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
                        <form action="/kalibrator/update/{{$kalibrator->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Kalibrator</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." value="{{ $kalibrator->klb_nama }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="merk" class="form-label">Merk</label>
                                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk..." value="{{ $kalibrator->klb_merk }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="model" class="form-label">Model</label>
                                            <input type="text" class="form-control" id="model" name="model" placeholder="Model..." value="{{ $kalibrator->klb_model }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seri" class="form-label">Seri</label>
                                            <input type="text" class="form-control" id="seri" name="seri" placeholder="Seri..." value="{{ $kalibrator->klb_seri }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="capacity" class="form-label">Capacity</label>
                                            <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity..." value="{{ $kalibrator->klb_capacity }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="datang" class="form-label">Tgl. Datang</label>
                                            <input type="date" class="form-control" id="datang" name="datang" value="{{ $kalibrator->klb_datang }}" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="periode" class="form-label">periode kalibrasi (bulan)</label>
                                            <input type="number" class="form-control" id="periode" name="periode" placeholder="Periode..." value="{{ $kalibrator->klb_period }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto Kalibrator</label>
                                            <input class="form-control" type="file" id="foto" name="foto">
                                            <div class="form-text">Kosongkan jika tidak ingin diganti</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8">
                                        <input type="hidden" name="num" id="num" value="1">
                                        <div class="detail">
                                            @foreach($kalibrator->kalibrator_detail as $k)
                                            <div class="row">                                    
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="nominal" class="form-label">Nominal</label>
                                                        <input type="text" class="form-control" id="nominal[]" name="nominal[]" placeholder="Nominal..." value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="koreksi" class="form-label">Koreksi</label>
                                                        <input type="text" class="form-control" id="koreksi[]" name="koreksi[]" placeholder="Koreksi..." value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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
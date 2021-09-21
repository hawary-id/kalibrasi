<!-- header -->
@extends('header') 
<!-- Konten -->
@section('konten')
<main>

    <div class="py-1 bg-light">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-2 d-flex justify-content-end">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid mt-2">   
        <div class="row">               
            <div class="col-md-9 col-12 mb-3">    
                <div class="card mb-3">  
                <div class="card-header bg-light">
                    Summary
                    <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                    <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                </div>  
                    <div class="card-body" id="cardmon">
                        <div class="row g-3">
                            <div class="col-md-3 col-6">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h4 class="card-title">150 Alat</h4>
                                        <a href="" class="text-white">Lihat Semua <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h4 class="card-title">10 User</h4>
                                        <a href="" class="text-white">Lihat Semua <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h4 class="card-title">5 Kategori</h4>
                                        <a href="" class="text-white">Lihat Semua <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <h4 class="card-title">250 Sertifikat</h4>
                                        <a href="" class="text-white">Lihat Semua <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="card mb-3">
                    <div class="card-header bg-light">
                        Jadwal Kalibrasi Terbaru
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusjdw"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashjdw"></i>
                    </div> 
                    <div class="card-body" id="cardjdw">
                        <table class="table table-sm table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kode Alat</th>
                                    <th scope="col">Jadwal Kalibrasi</th>
                                    <th scope="col">Lokasi Alat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>    
                        <a class="btn btn-secondary btn-sm float-end" href="">Lihat Semua</a> 
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel Terbaru</h5>
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="{{url('/images/logo.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-secondary btn-sm float-end" href="">Lihat Semua</a> 
                    </div>
                </div>
            </div>
            @include('rightbar') 
        </div>
    </div>
</main> 
@endsection
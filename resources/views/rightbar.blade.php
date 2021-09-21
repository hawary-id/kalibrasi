<div class="col-md-3 col-12">
    <div class="card mb-3">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#Pesan" type="button" role="tab" aria-controls="Pesan" aria-selected="true">Pesan</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#source_kode" type="button" role="tab" aria-controls="source_kode" aria-selected="false">Jadwal Kalibrasi</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#artikel" type="button" role="tab" aria-controls="artikel" aria-selected="false">Artikel</button>
                </div>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Pesan" role="tabpanel" aria-labelledby="Pesan-tab">
                    <div class="card-body">
                        <h5 class="card-title">Pesan Terbaru</h5>
                        <hr>
                        <nav class="nav flex-column">
                            <a class="nav-link" href="#">
                                @foreach($alat as $a)
                                <div class="row mb-3">
                                    <div class="col-2 col-md-3">
                                        <img src="{{ asset('images/kategori/'.$a->kategori->ktg_img) }}" alt="{{$a->kategori->ktg_nama}}" class="img-fluid">
                                    </div>
                                    <div class="col-10 col-md-9">
                                        <h5>{{$a->kategori->ktg_kode}}{{$a->alt_kode}}</h5>
                                        <span class="badge rounded-pill bg-info">{{$a->kategori->ktg_nama}}</span>
                                        <span class="badge rounded-pill bg-danger">{{$a->divisi->div_nama}}</span>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                            </a>                            
                        </nav>
                    </div>
                </div>
                <div class="tab-pane fade" id="source_kode" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Kalibrasi Terbaru </h5>
                        <hr>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                    <div class="card-body">
                        <h5 class="card-title">Special</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="card">    
        <div class="card-body">             
        </div>
    </div>
</div>
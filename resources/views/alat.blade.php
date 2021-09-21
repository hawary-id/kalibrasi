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
                    <li class="breadcrumb-item active" aria-current="page">Alat</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">        
            <div class="col-12">       
                <a class="btn btn-outline-primary my-2" href="/alat/tambah"><i class="bi bi-plus"></i> Alat Baru</a>
            </div>
            <div class="col-md-9 col-12 mb-3">    
                @include('flash-message')
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Alat Ukur
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <div class="table-responsive">
                            <table class="table table-sm" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Alat</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Seri</th>
                                        <th scope="col">Rentang</th>
                                        <th scope="col">Resolusi</th>
                                        <th scope="col">Tgl Datang</th>
                                        <th scope="col">Lokasi Alat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach($alat as $a)
                                    <tr>
                                        <td scope="row"><?php echo "$no";?></td>
                                        <td>{{$a->kategori->ktg_kode}}{{sprintf('%03s',$a->alt_kode)}} </td>
                                        <td>{{$a->kategori->ktg_nama}}</td>
                                        <td>{{$a->alt_merk}}</td>
                                        <td>{{$a->alt_seri}}</td>
                                        <td>{{$a->alt_rentang}}</td>
                                        <td>{{$a->alt_res}}</td>
                                        <td>{{$a->alt_tgl}}</td>
                                        <td>{{$a->divisi->div_nama}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapusmodal{{$a->id}}"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="hapusmodal{{$a->id}}" tabindex="-1" aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        
                                                        <div class="modal-body">
                                                            <h5 class="text-danger text-center">Yakin Hapus Data Ini?</h5>
                                                        </div>
                                                        <div class="modal-footer position-relative">
                                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="/alat/hapus/{{$a->id}}" class="btn btn-sm btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-outline-warning" href="/alat/edit/{{$a->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++;?>
                                    @endforeach
                                </tbody>
                            </table>   
                        </div> 
                    </div>
                </div>
            </div>
            @include('rightbar') 
        </div>
    </div>
</main> 
@endsection
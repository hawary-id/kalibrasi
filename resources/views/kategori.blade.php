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
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">        
            <div class="col-12">       
                <a class="btn btn-outline-primary my-2" href="/kategori/tambah"><i class="bi bi-plus"></i> Kategori Baru</a>
            </div>
            <div class="col-md-9 col-12 mb-3">    
                @include('flash-message')
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Kategori Alat
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <div class="table-responsive">
                            <table class="table table-sm" id="datatable">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Periode (bulan)</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach($kategori as $a)
                                    <tr>
                                        <td scope="row" class="text-center"><?php echo "$no";?></td>
                                        <td>{{$a->ktg_nama}}</td>
                                        <td class="text-center">{{$a->ktg_kode}}</td>
                                        <td class="text-center">{{$a->ktg_period}}</td>
                                        <td class="text-center">
                                        <a  href="" data-bs-toggle="modal" data-bs-target="#fotomodal{{$a->id}}"><img class="img-fluid" src="{{ asset('images/kategori/'.$a->ktg_img) }}" alt="{{$a->ktg_nama}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$a->ktg_nama}}"></a>
                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="fotomodal{{$a->id}}" tabindex="-1" aria-labelledby="fotomodal" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">  
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{$a->ktg_nama}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>            
                                                        <div class="modal-body">
                                                        <img class="img-fluid mx-auto d-block" src="{{ asset('images/kategori/'.$a->ktg_img) }}" alt="{{$a->ktg_nama}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
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
                                            <a class="btn btn-sm btn-outline-warning" href="/kategori/edit/{{$a->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil"></i></a>
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
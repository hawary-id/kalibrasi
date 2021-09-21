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
                    <li class="breadcrumb-item active" aria-current="page">Kalibrator</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">   
        <div class="row">        
            <div class="col-12">       
                <a class="btn btn-outline-primary my-2" href="/kalibrator/tambah"><i class="bi bi-plus"></i> Kalibrator Baru</a>
            </div>
            
            <div class="col-md-9 col-12 mb-3">    
                @include('flash-message')
                           
                <div class="card mb-3">  
                    <div class="card-header bg-light">
                        Data Kalibrator
                        <i class="btn btn-sm bi bi-plus-lg float-end" id="btnplusmon"></i>
                        <i class="btn btn-sm bi bi-dash-lg float-end" id="btndashmon"></i>
                    </div>  
                    <div class="card-body" id="cardmon"> 
                        <div class="table-responsive">
                            <table class="table table-sm" id="datatable">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Kalibrator</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Seri</th>
                                        <th scope="col">Capacity</th>
                                        <th scope="col">Periode (bulan)</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach($kalibrator as $a)
                                    <tr>
                                        <td scope="row" class="text-center"><?php echo "$no";?></td>
                                        <td class="text-center">{{$a->klb_nama}}</td>
                                        <td class="text-center">{{$a->klb_merk}}</td>
                                        <td class="text-center">{{$a->klb_model}}</td>
                                        <td class="text-center">{{$a->klb_seri}}</td>
                                        <td class="text-center">{{$a->klb_capacity}}</td>
                                        <td class="text-center">{{$a->klb_period}}</td>
                                        <td class="text-center">
                                        <a  href="" data-bs-toggle="modal" data-bs-target="#fotomodal{{$a->id}}"><img class="img-fluid" src="{{ asset('images/kalibrator/'.$a->klb_img) }}" alt="{{$a->klb_nama}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$a->klb_nama}}"></a>
                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="fotomodal{{$a->id}}" tabindex="-1" aria-labelledby="fotomodal" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">  
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{$a->klb_nama}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>            
                                                        <div class="modal-body">
                                                        <img class="img-fluid mx-auto d-block" src="{{ asset('images/kalibrator/'.$a->klb_img) }}" alt="{{$a->klb_nama}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapusmodal{{$a->id}}"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"></i></a>
                                            <!-- Modal Hapus-->
                                            <div class="modal fade" id="hapusmodal{{$a->id}}" tabindex="-1" aria-labelledby="hapusmodal" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content">
                                                        
                                                        <div class="modal-body">
                                                            <h5 class="text-danger text-center">Yakin Hapus Data Ini?</h5>
                                                        </div>
                                                        <div class="modal-footer position-relative">
                                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="/kalibrator/hapus/{{$a->id}}" class="btn btn-sm btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-outline-warning" href="/kalibrator/edit/{{$a->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <a class="btn btn-sm btn-outline-info" href="/kalibrator/sertifikat/{{$a->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Sertifikat"><i class="bi bi-file-earmark-text"></i></a>
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
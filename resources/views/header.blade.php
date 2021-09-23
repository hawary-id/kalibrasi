<!DOCTYPE html>
<html>
    <head>
        <title>Quality Control | Calibration Division</title>
        <link rel="icon" href="{{url('/images/logo.png')}}" type="image/x-icon"/>
        <!-- Bootstrap 5 CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap 5 Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <!-- custom css -->
        <style>
            #formcari {
                display: none;
            }
            #btnplusmon,#btnplusjdw{
                display: none;
            }
        </style>
    </head>
    <body>
    	<div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/logo.png')}}" alt="" height="30" class="d-inline-block align-text-top">QC Dept.
                </a>
                <div id="formcari" class="me-auto">
                    <form class="d-flex">    
                    <span class="btn" type="submit" id="btncarihide"><i class="bi bi-x-circle"></i></span>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <span class="btn nav-item me-auto" id="btncari"><i class="bi bi-search"></i></span>
                <div class="dropdown">
                    <span class="nav-item me-3 ms-1" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-1 mt-1 translate-middle p-1 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdownMenuLink">
                    <li><span class="dropdown-item text-center active">Jadwal Terbaru</span></li>
                        <li><a class="dropdown-item text-danger" href="#">DCA-002 | 03-07-21</a></li>
                        <li><a class="dropdown-item text-danger" href="#">DCA-002 | 03-07-21</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="#">Lihat Semua</a></li>

                    </ul>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="/alat">Data Alat</a>
                        <a class="nav-link" href="/kategori">Kategori</a>
                        <a class="nav-link" href="/kalibrator">Kalibrator</a>
                        <a class="nav-link" href="#">Jadwal Kalibrasi</a>
                        <a class="nav-link" href="#">Kalibrasi</a>
                        <a class="nav-link" href="#">Laporan</a>
                        <a class="nav-link" href="#">Profile</a>
                        <a class="nav-link" href="#">Tentang</a>
                        <a class="nav-link text-danger d-sm-block d-md-none" id="liveToastBtn" href="#">Logout <i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>                    
                <a class="nav-link logout text-danger d-sm-none d-md-block" id="liveToastBtn" href="">Logout <i class="bi bi-box-arrow-right"></i></a>
            </nav>
        </div>
        <!-- bagian konten blog -->
        @yield('konten')
        <hr>
        <footer class="text-center mt-2">
            <p>&copy; 2021 | <a href="https://www.hawary.com">www.hawary.com</a></p>
        </footer>
    </body>
    <!-- Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- Javascript -->
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();

            $("#btncari").click(function(){
                $("#btncari").hide();
                $("#formcari").show();
            });

            $("#btncarihide").click(function(){
                $("#formcari").hide();
                $("#btncari").show();
            });

            $("#btnplusmon").click(function(){
                $("#btnplusmon").hide();
                $("#cardmon").slideDown();
                $("#btndashmon").show();
            });

            $("#btndashmon").click(function(){
                $("#btndashmon").hide();
                $("#cardmon").slideUp();
                $("#btnplusmon").show();
            });

            $("#btnplusjdw").click(function(){
                $("#btnplusjdw").hide();
                $("#cardjdw").slideDown();
                $("#btndashjdw").show();
            });

            $("#btndashjdw").click(function(){
                $("#btndashjdw").hide();
                $("#cardjdw").slideUp();
                $("#btnplusjdw").show();
            });
            var i =0;
            $('#add').click(function(){
                ++i;
                var html = '';
                html+="<div class='row' id='inputFormRow'>";                                    
                html+="<div class='col-6'>";
                html+="<div class='mb-3'>";
                html+="<label for='nominal' class='form-label'>Nominal</label>";
                html+=" <input type='text' class='form-control' id='nominal["+i+"]' name='nominal["+i+"]' placeholder='Nominal...' required>";        
                html+=" </div>";
                html+="</div>";
                html+=" <div class='col-6'>";
                html+=" <div class='mb-3'>";
                html+=" <label for='koreksi' class='form-label'>Koreksi</label>";
                html+=" <div class='input-group'>";
                html+="<input type='text' class='form-control' id='koreksi["+i+"]' name='koreksi["+i+"]' placeholder='Koreksi...' required>";
                html+= "<button id='removeRow' type='button' class='btn btn-danger'><i class='bi bi-x'></i></button>";
                html+=" </div>";
                html+=" </div>";
                
                html+=" </div>";
                html+="</div>";
	            $('.detail').append(html);
                var num = parseInt($('#num').val());
                var hasil = num+1;
                $('#num').val(hasil);
            });
            $(document).on('click', '#removeRow', function () {
                $(this).closest('#inputFormRow').remove();
                var num = parseInt($('#num').val());
                var hasil = num-1;
                $('#num').val(hasil);
            });
        });
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>     
</html>
@extends('layouts.masteradmin')

@section('content')
<div class="content-wrapper bgcustom" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div style="color: white;">

                <h5><center>
                visi :
                <br>
                “Bersama Kita Bisa”. <br>
    misi : <br>
    1.	Memperkokoh persatuan dan kerukunan antar warga Desa Bunga Tanjung tanpa memandang agama, status sosial, golongan maupun suku/ ras. <br>
    2.	Meningkatkan sistem pelayanan kepada masyarakat. <br>
    3.	Meningkatkan mutu kesejahteraan masyarakat untuk mencapai taraf kehidupan yang lebih baik dan layak sehingga menjadi Desa yang maju dan mandiri. <br>
    4.	Menyelenggarakan urusan pemerintahan desa secara terbuka, bertanggung jawab sesuai dengan peraturan dan perundang-undangan. <br>
    5.	Memberdayakan masyarakat dalam proses  pembangunan dan mental spiritual melaui pelatihan, penyuluhan, penguatan ekonomi kerakyatan dan optimalisasi potensi lokal. <br>
    6.	Pelestarian lingkungan hidup dalam setiap pembangunan. <br>
    7.	Apapun permasalahan yang dihadapi, musyawarah lah yang utama.</center></h5>
            </div>
            <!-- Small boxes (Stat box) -->
            {{-- <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">



                            <h3>{{ $user }}</h3>

                            <p>Data User</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="/admin/pengumuman" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $datapenduduk }}</h3>

                            <p>Data Penduduk</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="/admin/agenda" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $kk }}</h3>

                            <p>Kartu Keluarga</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="/admin/listberita" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $surat }}</h3>

                            <p>Data Surat</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $permintaan }}</h3>
                            <p>Data Permintaan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <a href="/admin/pengumuman" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

            </div> --}}

            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<style>
    .bgcustom{
        background:  url("/kantordesa.jpg");
         height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

    }

</style>
@endsection

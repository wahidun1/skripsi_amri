@extends('layouts.masteradmin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Penduduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/{{auth()->user()->role}}/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->

    {{-- ###################################################################################################### --}}


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <button type="button" class="btn-sm btn-primary float-right" data-toggle="modal"
                                data-target="#modaltambah"><i class="fas fa-plus"></i> Tambah Data</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="datapengumuman" class="table table-bordered table-striped"
                                style="font-size: 14px;width:100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jenis Penduduk</th>
                                        <th style="width: 17%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ( $data as $key=>$datas )
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$datas->nik}}</td>
                                        <td>{{$datas->nama}}</td>
                                        <td>{{$datas->tgllahir->format('d/m/Y')}}</td>
                                        <td>{{$datas->jeniskelamin}}</td>
                                        <td>{{$datas->jenispenduduk}}</td>
                                        <td class="project-actions text-right">
                                            <div>
                                                <a class="btn btn-info btn-sm" href="/admin/datapenduduk/{{ $datas->id }}/detail" data-toggle="tooltip" data-placement="top" title="Detail">
                                                    <i class="fas fa-user">
                                                    </i>

                                                </a>
                                                <a class="btn btn-primary btn-sm" href="#"
                                                    data-target="#editModal-{{$datas->id}}" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>

                                                </a>
                                                <a class="btn btn-danger btn-sm delete"
                                                    href="#"  data-toggle="tooltip" data-placement="top" title="Hapus" data-id={{ $datas->id }}>
                                                    <i class="fas fa-trash">
                                                    </i>

                                                </a>

                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>


                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    {{-- ###################################################################################################### --}}


    {{-- Modal Tambah Data --}}
    <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Guru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/admin/datapenduduk/tambah" method="POST" id="quickForm"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <div class="row">
                                <div class="col-6">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Input</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nik">NIK *</label>
                                                <input type="number" class="form-control" id="nik"
                                                    placeholder="Input NIK" name="nik" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama">Nama *</label>
                                                <input type="text" class="form-control" id="nama"
                                                    placeholder="Input Nama" name="nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempatlahir">Tempat Lahir *</label>
                                                <input type="text" class="form-control" id="tempatlahir"
                                                    placeholder="Input Tempat Lahir" name="tempatlahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgllahir">Tanggal Lahir *</label>
                                                <input type="date" class="form-control" id="tgllahir"
                                                    placeholder="Input Tanggal Lahir" name="tgllahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jk">Jenis Kelamin *</label>
                                                <select name="jeniskelamin" class="form-control" id="jk" required>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="statuskawin">Status Kawin *</label>
                                                <select name="statuskawin" class="form-control" id="statuskawin"
                                                    required>
                                                    <option value="Sudah Kawin">Sudah Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                                    placeholder="Enter ..." required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="jenispenduduk">Jenis Penduduk *</label>
                                                <select name="jenispenduduk" class="form-control" id="jenispenduduk"
                                                    required>
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Tidak Tetap">Tidak Tetap</option>
                                                </select>
                                            </div>


                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Data Penduduk</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="kartukeluarga_id">Kepala Keluarga *</label>
                                                <select name="kartukeluarga_id" class="form-control select2bs4" id="kartukeluarga_id" style="width: 100%;"
                                                    required>
                                                    <option value="">-pilih-</option>
                                                    @foreach ($kk as $kk)
                                                    <option value="{{ $kk->id }}">{{ $kk->nokk }} - {{ $kk->kepalakeluarga }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan *</label>
                                                <input type="text" class="form-control" id="pekerjaan"
                                                    placeholder="Input Pekerjaan" name="pekerjaan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select name="pendidikan" class="form-control select2bs4" id="pendidikan" required>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select name="agama" class="form-control" id="agama" required>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="lurahdesa">Lurah/Desa</label>
                                                <input type="text" class="form-control" id="lurahdesa"
                                                    placeholder="Input" name="lurahdesa" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" class="form-control" id="kecamatan"
                                                    placeholder="Input Kecamatan" name="kecamatan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="kabupaten">Kabupaten</label>
                                                <input type="text" class="form-control" id="kabupaten"
                                                    placeholder="Input Kabupaten" name="kabupaten" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="provinsi">Provinsi</label>
                                                <input type="text" class="form-control" id="provinsi"
                                                    placeholder="Input Provinsi" name="provinsi" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="negara">Negara</label>
                                                <select name="negara" class="form-control" id="negara" required>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- /.card-body -->


                                    </div>
                                </div>
                            </div>


                        </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- end modal tambah data -->


    {{-- ###################################################################################################### --}}



    {{-- Modal edit Data --}}
    {{-- @foreach ($data as $feb)
    <div class="modal fade" id="editModal-{{$feb->id}}">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Guru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/guru/{{$feb->id}}/edit" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_guru">Nama</label>
                        <input name="nama_guru" type="text" class="form-control" id="nama_guru"
                            aria-describedby="emailHelp" placeholder="Nama" value="{{ $feb->nama_guru }}" required>
                    </div>

                    <div class="form-group {{ $errors->has('mapel')?' has-error':'' }}">
                        <label for="mapel">Mapel</label>
                        <select name="mapel_id" class="form-control" id="mapel" required>
                            @foreach ($mapel1 as $row)
                            <option value="{{ $row->id }}" @if($row->id==$feb->mapel_id) selected
                                @endif>{{ $row->mapel_nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jk" required>
                            <option value="Laki-Laki" @if($feb->jenis_kelamin=='Laki-Laki') selected
                                @endif>Laki-Laki</option>
                            <option value="Perempuan" @if($feb->jenis_kelamin=='Perempuan') selected
                                @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nohp">No HP</label>
                        <input name="tempat_lahir" type="number" value="{{ $feb->no_hp }}" class="form-control"
                            id="nohp" aria-describedby="emailHelp" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tgllhir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" value="{{ $feb->tanggal_lahir->format('Y-m-d') }}"
                            class="form-control" id="tgllhir" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach --}}
<!-- end modal edit data -->
</div>

@stop

@section('footer')
<script>
    $('.delete').click(function(){
        var data_id=$(this).attr('data-id');

        Swal.fire({
        title: 'Yakin ?',
        text: "Mau Dihapus Data Pegawai dengan id "+data_id +" ??",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location="/admin/datapenduduk/"+data_id+"/hapus"
        }
        })
    });
    $(function(){
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    })



</script>
@endsection

@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item active">DASHBOARD</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <H4><b>Jumlah Produk</b></H4>
                            <h3>{{ $jumlah_produk }}</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-box"></i>
                        </div>
                        <a href="{{ url('Admin/dosen') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4><b>Jumlah Pesanan</b></h4>
                            <h3>0</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <a href="{{ url('Admin/pengajuan/sk-pengajuan') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4><b>Jumlah User</b></h4>
                            <h3>{{ $jumlah_user }}</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="{{ url('Admin/pengajuan/pengajuan-masuk') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                {{-- <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">


                            <h4><b>Template Pengajuan</b></h4>
                            <h3>{{ $jumlah_template }}</h3>
                        </div>
                        <div class="icon">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <a href="{{ url('Admin/template') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4><b>Pengajuan Diterima</b></h4>
                            <h3>{{ $jumlah_pengajuanditerima }}</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a href="{{ url('Admin/riwayat-pengajuan') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">

                            <h4><b>Pengajuan Ditolak</b></h4>
                            <h3>{{ $jumlah_pengajuanditolak }}</h3>
                        </div>
                        <div class="icon">
                            <i class="far fa-file-excel"></i>
                        </div>
                        <a href="{{ url('Admin/riwayat-pengajuan') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="card-tools mt-2">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="btn btn-xs btn-primary" href="{{ url('Admin/produk') }}">
                                    <i class=" fa fa-arrow-left"></i>
                                    <span>Kembali</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card card-secondary card-outline mt-2">
                        <div class="card-header">
                            <div class="card-title">
                                <h5><b>Tambah Data Produk</b></h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/produk') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jenis Paket</label>
                                            <select class="form-control" name="jenis" id="">
                                                <option disabled selected>-Pilih Paket-</option>
                                                <option value="Foto Pre Wedding">Foto Pre Wedding
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Foto Produk</label>
                                            <input type="file" class="form-control" name="foto_produk" id=""
                                                accept=".pdf, .jpg">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Input</label>
                                            <input type="date" class="form-control" name="tgl_input" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-right"><i class="fa fa-upload"></i> Upload </button>
                            </form>
                        </div>
                    </div>

            </div>
            <!-- /.card -->
    </section>
    <!-- /.Left col -->
    </div>
    </div><!-- /.container-fluid -->

    </section>
@endsection

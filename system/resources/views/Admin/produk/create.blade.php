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
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card mt-4">
                        <div class="card-header">
                            {{-- <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="btn btn-primary" href="{{ url('Admin/template') }}">
                                            <i class=" fa fa-arrow-left"></i>
                                            <span>Kembali</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="card-title">Tambah Data Produk</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/produk') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jenis Paket</label>
                                            <select class="form-control" name="jenis_paket" id="jenis_file">
                                                <option disabled selected>-Pilih Paket-</option>
                                                <option value=" Foto Wedding + Decoration"> Foto Wedding + Decoration
                                                </option>
                                                <option value="Foto wedding">Foto Wedding
                                                </option>
                                                <option value="Foto Pre Wedding">Foto Pre Wedding
                                                </option>
                                                <option value="decoration">decoration
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
                                            <label for="" class="control-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Input</label>
                                            <input type="date" class="form-control" name="tgl_input" id="">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-right"><i class="fa fa-upload"></i> Upload </button>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
        </div><!-- /.container-fluid -->

    </section>
@endsection

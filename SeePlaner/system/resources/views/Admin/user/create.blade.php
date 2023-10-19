@extends('Layout.base')
@section('title', 'SeePlanner')
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
                            <div class="card-title"><b>Tambah Data Template</b></div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/user') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nama</label>
                                                    <input type="text" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Username</label>
                                                    <input type="text" name="username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Foto</label>
                                                    <input type="file" class="form-control" name="profile" id=""
                                                        accept=".pdf, .jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="" class="control-label">email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Password</label>
                                                    <input type="text" class="form-control" name="password"
                                                        id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan </button>
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

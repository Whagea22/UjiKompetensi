@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <div class="card-title">
                        <h3><b>User</b></h3>
                    </div>
                    <a href="{{ url('Admin/user/create') }}" class="btn btn-success float-right">
                        <i class="fa fa-plus"> Tambah User </i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table responsiv">
                        <table class="table table-bordered table-hover" id="example2">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($list_user as $Admin)
                                    <tr>
                                        <td style="text-align: center">{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a href="" terget="popup"
                                                    onclick="window.open('{{ url("public/$Admin->file") }}','popup','width=800,height=600'); return false;"><button
                                                        class="btn btn-dark"><i class="fa fa-info">
                                                        </i></button></a>
                                                <a href="{{ url('Admin/template/hapus', $Admin->id) }}"
                                                    class="btn btn-warning"
                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="{{ url('Admin/template/hapus', $Admin->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $Admin->nama }}
                                        </td>
                                        <td>
                                            {{ $Admin->username }}
                                        </td>
                                        <td>
                                            {{ $Admin->email }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

        </section>
    </div>
    </div>
    </div>
@endsection

@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <div class="card-title">
                        <h3><b>Produk</b></h3>
                    </div>
                    <div class="btn-group float-right" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus">
                                Add Produk</i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{ url('Admin/produk/create') }}">Wedding</a>
                            <a class="dropdown-item" href="{{ url('Admin/produk/addprewed') }}">Pre Wedding</a>
                            <a class="dropdown-item" href="{{ url('Admin/produk/adddekorasi') }}">decoration</a>

                        </div>
                    </div>
                    {{-- <a href="{{ url('Admin/produk/create') }}" class="btn btn-success float-right">
                        <i class="fa fa-plus"> Tambah Produk </i>
                    </a> --}}
                </div>
                <div class="card-body">
                    <div class="table responsiv">
                        <table class="table table-bordered table-hover" id="example2">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th width="100px">
                                        Aksi
                                    </th>
                                    <th>
                                        Jenis Produk
                                    </th>
                                    <th>
                                        Tanggal Input
                                    </th>
                                    <th>
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($list_produk as $Produk)
                                    <tr>
                                        <td style="text-align: center">{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group">

                                                <a href="" terget="popup"
                                                    onclick="window.open('{{ url("public/$Produk->file") }}','popup','width=800,height=600'); return false;"><button
                                                        class="btn btn-dark"><i class="fa fa-info">
                                                        </i></button></a>
                                                <a href="{{ url('Produk/template/hapus', $Produk->id) }}"
                                                    class="btn btn-warning"
                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="{{ url('Produk/template/hapus', $Produk->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $Produk->jenis_paket }}
                                        </td>
                                        <td>
                                            {{ $Produk->tgl_input }}
                                        </td>
                                        <td>
                                            {{ $Produk->harga }}
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

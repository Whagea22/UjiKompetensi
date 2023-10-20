@extends('Layout.base')
@section('title', 'See Planner')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <div class="card-title">
                        <h3><b>Pesanan</b></h3>
                    </div>
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
                                        Jenis Produk
                                    </th>
                                    <th>
                                        Atas Nama
                                    </th>
                                    <th>
                                        Tgl Pesanan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td>Foto Wedding + Decoration</td>
                                    <td>Bambang</td>
                                    <td>2022-11-11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

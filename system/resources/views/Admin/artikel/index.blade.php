@extends('Layout.base')
@section('title', 'See Planner')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <div class="card-title">
                        <h3><b>Artikel</b></h3>
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
                                        Nama User
                                    </th>
                                    <th>
                                        isi
                                    </th>
                                    <th>
                                        Tgl artikel
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

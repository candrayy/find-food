@extends('layouts.app')

@section('title', 'Find Food')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">
                                Hasil Data Yang Ingin Dicari
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kriteria</th>
                                        <th scope="col">Rasa</th>
                                        <th scope="col">Nama Makanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse (dd($makanans) as $mkn)
                                    <tr>
                                        <td>{{ $mkn->kriteria->nama_kriteria }}</td>
                                        <td>{{ $mkn->rasa->nama_rasa }}</td>
                                        <td>{{ $mkn->nama_makanan }}</td>
                                    </tr>
                                    @empty
                                    Tidak Ada Hasil
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
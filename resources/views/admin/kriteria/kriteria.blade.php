@extends('admin.layouts.app')

@section('title', 'Kriteria')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Kriteria</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('tambah-kriteria') }}" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Kriteria</th>
                                        <th scope="col">Nama Kriteria</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as $kr)
                                    <tr>
                                        <td>{{ $kriteria->firstItem()+$loop->index }}</td>
                                        <td>{{ $kr->kd_kriteria }}</td>
                                        <td>{!! Str::limit($kr->nama_kriteria, 20) !!}</td>
                                        <td>
                                            <a href="{{ route('edit-kriteria', $kr->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                            <a href="{{ route('hapus-kriteria', $kr->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" type="button">
                                                <i class="fas fa-minus"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $kriteria->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
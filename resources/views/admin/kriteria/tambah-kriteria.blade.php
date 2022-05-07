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
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Kriteria
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('simpan-kriteria') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_kriteria" class="form-label">Kode Kriteria</label>
                                <input type="text" id="kd_kriteria" name="kd_kriteria" class="form-control" placeholder="Masukan Kode kriteria" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                                <input type="text" id="nama_kriteria" name="nama_kriteria" class="form-control" placeholder="Masukan Nama Kriteria" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Simpan</button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
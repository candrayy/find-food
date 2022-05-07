@extends('admin.layouts.app')

@section('title', 'Makanan')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Makanan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Makanan
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('simpan-makanan') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kriteria_id" class="form-label">Kriteria</label>
                                <select class="form-control" name="kriteria_id" id="kriteria_id">
                                @foreach($kriteria as $kr)
                                <option value="{{ $kr->id }}">{{ $kr->nama_kriteria }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rasa_id" class="form-label">Rasa</label>
                                <select class="form-control" name="rasa_id" id="rasa_id">
                                @foreach($rasa as $rsa)
                                <option value="{{ $rsa->id }}">{{ $rsa->nama_rasa }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                <input type="text" id="nama_makanan" name="nama_makanan" class="form-control" placeholder="Masukan Nama Makanan" required>
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
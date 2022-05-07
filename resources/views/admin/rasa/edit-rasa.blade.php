@extends('admin.layouts.app')

@section('title', 'Rasa')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Rasa</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Rasa
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-rasa',$rasa->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_rasa" class="form-label">Kode Rasa</label>
                                <input type="text" id="kd_rasa" name="kd_rasa" class="form-control" value="{{ $rasa->kd_rasa }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_rasa" class="form-label">Nama Rasa</label>
                                <input type="text" id="nama_rasa" name="nama_rasa" class="form-control" value="{{ $rasa->nama_rasa }}" required>
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
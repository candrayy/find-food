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
                                Pilih Data Yang Ingin Dicari
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('hasil') }}" method="get">
                            <label for="kriteria_id" class="form-label">Kriteria</label>
                            @foreach ($kriteria as $kr)
                            @php
                                $checked = [];
                                if(isset($_GET['kriteria_id']))
                                {
                                    $checked = $_GET['kriteria_id'];
                                }
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kriteria_id[]" value="{{ $kr->id }}"
                                @if(in_array($kr->id, $checked)) checked @endif
                                />
                                <label class="form-check-label">
                                    {{ $kr->nama_kriteria }}
                                </label>
                            </div>
                            @endforeach
                            <hr>
                            <label for="rasa_id" class="form-label">Rasa</label>
                            @foreach ($rasa as $sra)
                            @php
                                $checked2 = [];
                                if(isset($_GET['rasa_id']))
                                {
                                    $checked2 = $_GET['rasa_id'];
                                }
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rasa_id[]" value="{{ $sra->id }}"
                                @if(in_array($sra->id, $checked2)) checked2 @endif
                                />
                                <label class="form-check-label">
                                    {{ $sra->nama_rasa }}
                                </label>
                            </div>
                            @endforeach
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Proses</button>
                            </div>
                        </form>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection
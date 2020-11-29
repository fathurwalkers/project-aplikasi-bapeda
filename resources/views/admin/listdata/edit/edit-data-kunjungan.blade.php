@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Kunjungan</h5>
        <div class="card-body">
            <form action="{{ url('/admin/data/data-kunjungan-update') }}/{{ $idkunjungan }}" method="POST">

                @csrf

                <div class="form-group row">
                    <label for="inputTahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input value="{{ $data_kunjungan->tahun }}" name="tahun" type="text" class="form-control"
                            id="inputTahun" placeholder="">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-2">
                        <p class="mb-1">Mancanegara</p>
                        <input value="{{ $data_kunjungan->mancanegara }}" name="mancanegara" type="number" min="0"
                            step="1" class="form-control inline">
                    </div>

                    <div class="col-sm-2">
                        <p class="mb-1">Domestik</p>
                        <input value="{{ $data_kunjungan->domestik }}" name="domestik" type="number" min="0" step="1"
                            class="form-control">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input value="{{ $data_kunjungan->jumlah }}" name="jumlah" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Edit Data</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
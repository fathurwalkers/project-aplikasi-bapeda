@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')

<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Situs Cagar Budaya</h5>
        <div class="card-body">
            <form action="{{ route('update-cagar-budaya', $cagarbudaya->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                        <p class="mb-2">Tahun</p>
                        <input value="{{ $cagarbudaya->tahun }}" name="tahun" type="number" min="2017" step="1"
                            class="form-control inline">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select value="{{ $cagarbudaya->kecamatan }}" name="kecamatan" class="form-control"
                            id="kecamatanFormControlSelect1">
                            <option>Lasalimu</option>
                            <option>Lasalimu Selatan</option>
                            <option>Siotapina</option>
                            <option>Pasarwajo</option>
                            <option>Wolowa</option>
                            <option>Wabula</option>
                            <option>Kapuntori</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Situs Cagar Budaya</label>
                    <div class="col-sm-10">
                        <input value="{{ $cagarbudaya->situscagarbudaya }}" name="situscagarbudaya" type="text"
                            class="form-control" id="inputjumlah" placeholder="Masukkan Cagar Budaya...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input value="{{ $cagarbudaya->jumlah }}" name="jumlah" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Input Data</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@section('after-script')

@endsection
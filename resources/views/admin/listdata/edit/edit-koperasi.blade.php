@extends('layouts.adminlayout')

@section('title', 'Edit Data')

@section('main-content')

<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Koperasi</h5>
        <div class="card-body">
            <form action="{{ route('update-koperasi', $datakoperasi->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                        <p class="mb-2">Tahun</p>
                        <input value="{{ $datakoperasi->tahun }}" name="tahun" type="number" min="2017" step="1"
                            class="form-control inline">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select value="{{ $datakoperasi->kecamatan }}" name="kecamatan" class="form-control"
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

                <div>
                    <p class="font-weight-bold">Jenis Koperaso</p>
                </div>

                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">KUD</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kud }}" name="kud" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">KPRI</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kpri }}" name="kpri" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">KSU</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->ksu }}" name="ksu" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Koptani</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->koptani }}" name="koptani" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kopwan</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kopwan }}" name="kopwan" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kopnel</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kopnel }}" name="kopnel" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kopmu</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kopmu }}" name="kopmu" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kop_TKBM</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kop_tkbm }}" name="kop_tkbm" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kop.pontren</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kop_pontren }}" name="kop_pontren" type="text"
                            class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kop.komite</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kop_komite }}" name="kop_komite" type="text"
                            class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">KSP</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->ksp }}" name="ksp" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kopkar</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kopker }}" name="kopker" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kopas</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->kopas }}" name="kopas" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Primkop</label>
                    <div class="col-sm-10">
                        <input value="{{ $datakoperasi->primkop }}" name="primkop" type="text" class="form-control"
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
@extends('layouts.adminlayout')

@section('title', 'Edit Data')

@section('main-content')

<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Perikanan Jenis Budidaya</h5>
        <div class="card-body">
            <form action="{{ route('update-perikanan-jenis', $perikananjenis->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                        <p class="mb-2">Tahun</p>
                        <input value="{{ $perikananjenis->tahun }}" name="tahun" type="number" min="2017" step="1"
                            class="form-control inline">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select value="{{ $perikananjenis->kecamatan }}" name="kecamatan" class="form-control"
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
                    <p class="font-weight-bold">Jenis Budidaya</p>
                </div>

                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Rumput Laut</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->rumput_laut }}" name="rumput_laut" type="text"
                            class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Mabe</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->mabe }}" name="mabe" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kerapu</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->kerapu }}" name="kerapu" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Kuwe</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->kuwe }}" name="kuwe" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Lobster</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->lobster }}" name="lobster" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Bandeng</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->bandeng }}" name="bandeng" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Nila</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->nila }}" name="nila" type="text" class="form-control"
                            id="inputjumlah" placeholder="Masukkan jumlah...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Lele</label>
                    <div class="col-sm-10">
                        <input value="{{ $perikananjenis->lele }}" name="lele" type="text" class="form-control"
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
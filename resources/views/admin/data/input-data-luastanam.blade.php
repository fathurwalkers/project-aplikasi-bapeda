@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')

<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Luas Tanam</h5>
        <div class="card-body">
        <form action="{{ route('post-luas-tanam-satu') }}" method="POST">
                @csrf
                <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <p class="mb-2">Tahun</p>
                  <input name="tahun" type="number" min="2017" step="1" class="form-control inline">
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select name="kecamatan" class="form-control" id="kecamatanFormControlSelect1">
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
                    <p class="font-weight-bold">Jenis Luas Tanam</p>
                    </div>

                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">PADI</label>
                        <div class="col-sm-10">
                          <input name="padi" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">PADI SAWAH</label>
                        <div class="col-sm-10">
                          <input name="padi_sawah" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">PADI LADANG</label>
                        <div class="col-sm-10">
                          <input name="padi_ladang" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">JAGUNG</label>
                        <div class="col-sm-10">
                          <input name="jagung" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">JAGUNG HIBRIDA</label>
                        <div class="col-sm-10">
                          <input name="jagung_hibrida" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">JAGUNG LOKAL</label>
                        <div class="col-sm-10">
                          <input name="jagung_lokal" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">UBI KAYU</label>
                        <div class="col-sm-10">
                          <input name="ubi_kayu" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">UBI JALAR</label>
                        <div class="col-sm-10">
                          <input name="ubi_jalar" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">KACANG TANAH</label>
                        <div class="col-sm-10">
                          <input name="kacang_tanah" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">KACANG KEDELAI</label>
                        <div class="col-sm-10">
                          <input name="kacang_kedelai" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">KACANG HIJAU</label>
                        <div class="col-sm-10">
                          <input name="kacang_hijau" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
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
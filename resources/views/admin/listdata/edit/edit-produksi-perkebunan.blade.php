@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')

<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Produksi Perkebunan</h5>
        <div class="card-body">
        <form action="{{ url('/admin/data/data-produksi-perkebunan-update') }}/{{ $data_perkebunan->id }}" method="POST">
                @csrf
                <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <p class="mb-2">Tahun</p>
                <input value="{{ $data_perkebunan->produksi_tahun }}" name="produksi_tahun" type="number" min="2017" step="1" class="form-control inline">
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select value="{{ $data_perkebunan->produksi_kecamatan }}" name="produksi_kecamatan" class="form-control" id="kecamatanFormControlSelect1">
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
                    <p class="font-weight-bold">Jenis Tanaman</p>
                    </div>

                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Jambu Mente</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_jambu }}" name="produksi_jambu" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Kakao</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_kakao }}" name="produksi_kakao" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Kelapa Dalam</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_kelapadalam }}" name="produksi_kelapadalam" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Kopi</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_kopi }}" name="produksi_kopi" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Lada</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_lada }}" name="produksi_lada" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputjumlah" class="col-sm-2 col-form-label">Pala</label>
                        <div class="col-sm-10">
                          <input value="{{ $data_perkebunan->produksi_pala }}" name="produksi_pala" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
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

@section('after-script')

@endsection
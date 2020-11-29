@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Pendidikan</h5>
        <div class="card-body">
        <form action="" method="POST">
            
                @csrf
                
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select name="namakecamatan" class="form-control" id="kecamatanFormControlSelect1">
                          <option>Lasalimu</option>
                          <option>Lasalimu Selatan</option>
                          <option>Siotapina</option>
                          <option>Pasarwajo</option>
                          <option>Wolowa</option>
                          <option>Wabula</option>
                          <option>Kapuntori</option>
                        </select>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label for="Kecamatan">Jenjang Pendidikan</label>
                        <select name="jenjang_pendidikan" class="form-control" id="kecamatanFormControlSelect1">
                          <option>PAUD</option>
                          <option>SD</option>
                          <option>SMP</option>
                        </select>
                      </div>
    

                    <div class="col-md-3 mb-3">
                        <p class="mb-2">Jumlah Sekolah</p>
                      <input name="jumlahsekolah" type="number" min="0" step="1" class="form-control inline">
                    </div>
                </div>
                
                <div>
                <p class="mb-1">Status Sekolah</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Negri</p>
                      <input name="statussekolahnegeri" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Swasta</p>
                        <input name="statussekolahswasta" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Jumlah Murid</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Perempuan</p>
                      <input name="jumlahmuridperempuan" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Laki-laki</p>
                        <input name="jumlahmuridlaki" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Status Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">PNS</p>
                      <input name="gurupns" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Non PNS</p>
                        <input name="gurunonpns" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Jumlah Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Laki-Laki</p>
                      <input name="jumlahgurulaki" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Perempuan</p>
                        <input name="jumlahguruperempuan" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Pendidikan Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">D-III</p>
                      <input name="gurudtiga" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">S-I</p>
                        <input name="gurussatu" type="number" min="0" step="1" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">S-II</p>
                        <input name="gurusdua" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Kondisi Sekolah</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Baik</p>
                      <input name="kondisisekolahbaik" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Rusak</p>
                        <input name="kondisisekolahrusak" type="number" min="0" step="1" class="form-control">
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
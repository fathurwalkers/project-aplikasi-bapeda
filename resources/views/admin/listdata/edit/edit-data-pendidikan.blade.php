@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Edit Data Pendidikan</h5>
        <div class="card-body">
        <form action="{{ url('/admin/data/data-pendidikan-edit/update') }}/{{ $idpendidikan }}" method="POST">
            
                @csrf
                
                <div class="form-group row">
                    <div class="col-md-3 mb-3">
                        <label for="Kecamatan">Nama Kecamatan</label>
                        <select value="{{ $data_pendidikan->namakecamatan}}" name="namakecamatan" class="form-control" id="kecamatanFormControlSelect1">
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
                        <select value="{{ $data_pendidikan->jenjang_pendidikan}}" name="jenjang_pendidikan" class="form-control" id="kecamatanFormControlSelect1">
                          <option>PAUD</option>
                          <option>SD</option>
                          <option>SMP</option>
                        </select>
                      </div>
    

                    <div class="col-md-3 mb-3">
                        <p class="mb-2">Jumlah Sekolah</p>
                      <input value="{{ $data_pendidikan->jumlahsekolah}}" name="jumlahsekolah" type="number" min="0" step="1" class="form-control inline">
                    </div>
                </div>
                
                <div>
                <p class="mb-1">Status Sekolah</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Negri</p>
                      <input value="{{ $data_pendidikan->statussekolahnegeri}}" name="statussekolahnegeri" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Swasta</p>
                        <input value="{{ $data_pendidikan->statussekolahswasta}}" name="statussekolahswasta" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Jumlah Murid</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Perempuan</p>
                      <input value="{{ $data_pendidikan->jumlahmuridperempuan}}" name="jumlahmuridperempuan" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Laki-laki</p>
                        <input value="{{ $data_pendidikan->jumlahmuridlaki}}" name="jumlahmuridlaki" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Status Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">PNS</p>
                      <input value="{{ $data_pendidikan->gurupns}}" name="gurupns" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Non PNS</p>
                        <input value="{{ $data_pendidikan->gurunonpns}}" name="gurunonpns" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Jumlah Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Laki-Laki</p>
                      <input value="{{ $data_pendidikan->jumlahgurulaki}}" name="jumlahgurulaki" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Perempuan</p>
                        <input value="{{ $data_pendidikan->jumlahguruperempuan}}" name="jumlahguruperempuan" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Pendidikan Guru</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">D-III</p>
                      <input value="{{ $data_pendidikan->gurudtiga}}" name="gurudtiga" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">S-I</p>
                        <input value="{{ $data_pendidikan->gurussatu}}" name="gurussatu" type="number" min="0" step="1" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">S-II</p>
                        <input value="{{ $data_pendidikan->gurusdua}}" name="gurusdua" type="number" min="0" step="1" class="form-control">
                    </div>
                </div>

                <div>
                    <p class="mb-1">Kondisi Sekolah</p>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Baik</p>
                      <input value="{{ $data_pendidikan->kondisisekolahbaik}}" name="kondisisekolahbaik" type="number" min="0" step="1" class="form-control inline">
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-1">Rusak</p>
                        <input value="{{ $data_pendidikan->kondisisekolahburuk}}" name="kondisisekolahrusak" type="number" min="0" step="1" class="form-control">
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
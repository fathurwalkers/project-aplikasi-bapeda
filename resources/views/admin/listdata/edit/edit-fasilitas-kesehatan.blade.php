@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Fasilitas Kesehatan</h5>
        <div class="card-body">
        <form action="{{ url('/admin/data/data-fasilitas-kesehatan/update') }}/{{ $idedit}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="inputFalisitas" class="col-sm-2 col-form-label">Falisitas Kesehatan </label>
                    <div class="col-sm-10">
                    <input value="{{$data_fk->fasilitas_kesehatan}}" name="fasilitas_kesehatan" type="text" class="form-control" id="inputFalisitas" placeholder="Masukkan Nama Fasilitas Kesehatan...">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputkabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <input value="{{$data_fk->kabupaten}}" name="kabupaten" type="text" class="form-control" id="inputkabupaten" placeholder="Masukkan Nama Kabupaten...">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputkabupaten" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                        <select value="{{$data_fk->kecamatan}}" name="kecamatan" class="form-control" id="kecamatanFormControlSelect1">
                            <option>Lasalimu</option>
                            <option>Lasalimu Selatan</option>
                            <option>Siotapina</option>
                            <option>Pasarwajo</option>
                            <option>Wolowa</option>
                            <option>Wabula</option>
                            <option>Kapuntori</option>
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <p class="mb-1">Jumlah</p>
                        <input value="{{$data_fk->jumlah}}" name="jumlah" type="number" min="0" step="1" class="form-control" pattern="[0-9]">
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
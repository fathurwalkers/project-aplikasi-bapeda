@extends('layouts.adminlayout')

@section('title', 'Edit Data')

@section('main-content')



<div class="container"> 
    <div class="card mt-3">
        <h5 class="card-header">Edit Data Status Pasar</h5>
        <div class="card-body">
        <div>
            
        <form action="{{ route('update-data-perdagangan', $perdagangan->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kecamatan</label>
                <select value="{{ $perdagangan->kecamatan }}" name="kecamatan" class="form-control" id="exampleFormControlSelect1">
                        <option>Pasarwajo</option>
                        <option>Kapontori</option>
                        <option>Lasalimu</option>
                        <option>Lasalimu Selatan</option>
                        <option>Siotapina</option>
                        <option>Wolowa</option>
                        <option>Wabula</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputZip">Pasar Aktif</label>
                    <input value="{{ $perdagangan->pasar_aktif }}" name="pasar_aktif" type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group">
                    <label for="inputZip">Pasar Tidak Aktif</label>
                    <input value="{{ $perdagangan->pasar_tidakaktif }}" name="pasar_tidakaktif" type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group">
                    <label for="inputZip">Pasar Belum Terpakai</label>
                    <input value="{{ $perdagangan->pasar_belumterpakai }}" name="pasar_belumterpakai" type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tahun</label>
                    <select value="{{ $perdagangan->tahun }}" name="tahun" class="form-control" id="exampleFormControlSelect1">
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-success float-right" type="submit">Input Data</button>
                </div>
            
            </form>



        </div>
    </div>
</div>


@endsection
@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')



<div class="container"> 
    <div class="card mt-3">
        <h5 class="card-header">Input Data Catatan Sipil</h5>
        <div class="card-body">
        <div>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kecamatan</label>
                <select autofocus name="kecamatan" class="form-control" id="exampleFormControlSelect1">
                    <option hidden>Pilih Kecamatan</option>
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
                <label for="exampleFormControlSelect1">Tahun</label>
                <select name="tahun" class="form-control" id="exampleFormControlSelect1">
                    <option hidden>Pilih Tahun</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
                    <option hidden>Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            </div>
            <div class="form-group">
                <label for="inputZip">Jumlah</label>
                <input name="jumlah" type="text" class="form-control" id="inputZip" placeholder="contoh : 25201">
            </div>
            <button class="btn btn-success float-right" type="submit">Input Data</button>
        </form>
        </div>
    </div>
</div>


@endsection
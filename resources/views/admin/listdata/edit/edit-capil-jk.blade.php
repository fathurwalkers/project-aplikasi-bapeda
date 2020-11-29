@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')



<div class="container"> 
    <div class="card mt-3">
        <h5 class="card-header">Edit Data Catatan Sipil</h5>
        <div class="card-body">
        <div>
        <form action="{{ url('/admin/data/data-capil-jk-update') }}/{{ $capiljk->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kecamatan</label>
                <select value="{{ $capiljk->kecamatan }}" autofocus name="kecamatan" class="form-control" id="exampleFormControlSelect1">
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
                <select value="{{ $capiljk->tahun }}" name="tahun" class="form-control" id="exampleFormControlSelect1">
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select value="{{ $capiljk->jenkel }}" name="jenkel" class="form-control" id="exampleFormControlSelect1">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            </div>
            <div class="form-group">
                <label for="inputZip">Jumlah</label>
                <input value="{{ $capiljk->jumlah }}" name="jumlah" type="text" class="form-control" id="inputZip" placeholder="contoh : 25201">
            </div>
            <button class="btn btn-success float-right" type="submit">Edit Data</button>
        </form>
        </div>
    </div>
</div>

@endsection
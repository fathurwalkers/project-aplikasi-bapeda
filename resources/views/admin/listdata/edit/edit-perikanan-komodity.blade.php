@extends('layouts.adminlayout')

@section('title', 'Edit Data')

@section('main-content')



<div class="container"> 
    <div class="card mt-3">
        <h5 class="card-header">Edit Data Perikanan Tangkap</h5>
        <div class="card-body">
        <div>
        <form action="{{ url('/admin/data/data-perikanan-komodity-update') }}/{{ $perikanan->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kecamatan</label>
            <select value="{{ $perikanan->kecamatan }}" autofocus name="kecamatan" class="form-control" id="exampleFormControlSelect1">
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
                <select value="{{ $perikanan->tahun }}" name="tahun" class="form-control" id="exampleFormControlSelect1">
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Komodity</label>
                <select value="{{ $perikanan->komodity }}" autofocus name="komodity" class="form-control" id="exampleFormControlSelect1">
                        <option>Teri</option>
                        <option>Belanak</option>
                        <option>Ikan Terbang</option>
                        <option>Julung-julung</option>
                        <option>Kembung</option>
                        <option>Layang</option>
                        <option>Selar Bentong</option>
                        <option>Tembang</option>
                        <option>Tuna Mata Besar</option>
                        <option>Tuna Sirip Biru</option>
                        <option>Tuna Madidihang</option>
                        <option>Tongkol</option>
                        <option>Cakalang</option>
                        <option>Tenggiri</option>
                        <option>Kuwe/Bobara</option></option>
                        <option>Bawal</option></option>
                        <option>Setuhuk Hitam/marlin</option></option>
                        <option>Lencam, Ketamba</option></option>
                        <option>Kakap Batu</option></option>
                        <option>Kakap Merah/Bambangan</option></option>
                        <option>Kurisi</option></option>
                        <option>Biji Nangka</option></option>
                        <option>Alu-Alu</option></option>
                        <option>Kerong-kerong</option></option>
                        <option>Ayam-ayam</option></option>
                        <option>Ekor kuning, Pisang-Pisang</option></option>
                        <option>Kerapu Karang</option></option>
                        <option>Kerapu Bebek</option></option>
                        <option>Kerapu Macan</option></option>
                        <option>Kerapu Lumpur</option></option>
                        <option>Kerapu Sunu</option></option>
                        <option>Baronang Lingkis</option></option>
                        <option>Ikan Baronang</option>
                        <option>Kakak Tua</option>
                        <option>Kepiting</option>
                        <option>Rajungan</option>
                        <option>Cumi</option>
                        <option>Sotong</option>
                        <option>Gurita</option>
                        <option>Teripang</option>
                        <option>Layaran</option>
                        <option>Lemadang</option>

                </select>
            </div>

            </div>
            <div class="form-group">
                <label for="inputZip">Jumlah</label>
                <input value="{{ $perikanan->jumlah }}" name="jumlah" type="text" class="form-control" id="inputZip" placeholder="contoh : 25201">
            </div>
            <button class="btn btn-success float-right" type="submit">Input Data</button>
        </form>
        </div>
    </div>
</div>


@endsection
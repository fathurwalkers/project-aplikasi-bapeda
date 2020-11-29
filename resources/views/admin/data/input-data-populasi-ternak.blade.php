@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Populasi Ternak</h5>
        <div class="card-body">

        <form action="" method="POST">
            @csrf
            <div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kecamatan</label>
                    <select name="kecamatan" class="form-control" id="exampleFormControlSelect1">
                        <option hidden>Pilih Kecamatan</option>
                        <option>Kapontori</option>
                        <option>Lasalimu</option>
                        <option>Lasalimu Selatan</option>
                        <option>Siotapina</option>
                        <option>Wolowa</option>
                        <option>Pasarwajo</option>
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
                        <option>2020</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Ternak</label>
                    <select name="jenisternak" class="form-control" id="exampleFormControlSelect1">
                        <option value="disable select">Jenis Ternak</option>
                        <option>Ternak Besar</option>
                        <option>Ternak Kecil</option>
                        <option>Ternak Unggas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Hewan</label>
                    <select name="jenishewan" class="form-control" id="exampleFormControlSelect1">
                        <option hidden>Hewan</option>
                        <option>Sapi</option>
                        <option>Kerbau</option>
                        <option>Kuda</option>
                        <option>Kambing</option>
                        <option>Domba</option>
                        <option>Babi</option>
                        <option>Ayam Buras</option>
                        <option>Ayam Ras</option>
                        <option>Itik/Bebek</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputZip">Jumlah</label>
                    <input name="jumlahkeseluruhan" type="text" class="form-control" id="inputZip">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Input Data</button>  
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
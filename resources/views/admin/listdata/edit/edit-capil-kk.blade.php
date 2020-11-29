@extends('layouts.adminlayout')

@section('title', 'Edit')

@section('main-content')



<div class="container"> 
    <div class="card mt-3">
        <h5 class="card-header">Edit Catatan Sipil</h5>
        <div class="card-body">
        <div>
            
        <form action="{{ url('/admin/data/data-capil-kk-update') }}/{{ $data_capil_kk->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kecamatan</label>
            <select value="{{ $data_capil_kk->kecamatan }}" name="kecamatan" class="form-control" id="exampleFormControlSelect1">
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
                <select value="{{ $data_capil_kk->tahun }}" name="tahun" class="form-control" id="exampleFormControlSelect1">
                    <option>2017</option>
                     <option>2018</option>
                      <option>2019</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputZip">Jumlah KK</label>
                <input value="{{ $data_capil_kk->jumlahkk }}" name="jumlahkk" type="text" class="form-control" id="inputZip">
            </div>

            <div class="form-group">
                <button class="btn btn-success float-right" type="submit">Input Data</button>
            </div>
    
        </form>



        </div>
    </div>
</div>


@endsection
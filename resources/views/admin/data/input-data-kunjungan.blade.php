@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('main-content')
<div class="container mt-2">
    <div class="card">
        <h5 class="card-header">Input Data Kunjungan</h5>
        <div class="card-body">
        <form action="" method="POST">
            
                @csrf

                <div class="form-group row">
                    <label for="inputTahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                      <input name="tahun" type="text" class="form-control" id="inputTahun" placeholder="">
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-2">
                        <p class="mb-1">Mancanegara</p>
                      <input name="mancanegara" type="number" min="0" step="1" class="form-control inline">
                    </div>

                    <div class="col-sm-2">
                        <p class="mb-1">Domestik</p>
                        <input name="domestik" type="number" min="0" step="1" class="form-control">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="inputjumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input name="jumlah" type="text" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah...">
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
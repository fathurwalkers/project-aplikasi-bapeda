@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
    <h5 class="card-header text-white bg-dark">
        <a class="d-inline-flex btn btn-success float-right" href="{{ route('index-print-kesehatan') }}">PRINT DATA</a>
        Data Fasilitas Kesehatan Tahun 2019 - {{ $namakecamatan }}</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Fasilitas</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Jumlah</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_fasilitas_kesehatan as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fk->fasilitas_kesehatan }}</td>
                        <td>{{ $fk->kabupaten}}</td>
                        <td>
                            <a href="{{ url('/admin/data/data-fasilitas-kesehatan') }}/{{ $fk->kecamatan}}">{{ $fk->kecamatan}}</a>
                        </td>
                        <td>{{ $fk->jumlah}}</td>
                        <td class="d-inline-flex text-center">
                            <a href="{{ url('/admin/data/data-fasilitas-kesehatan/edit') }}/{{$fk->id}}" class="btn btn-primary">Edit</a>
                                <form action="{{ url('/admin/data/data-fasilitas-kesehatan-delete/delete') }}/{{ $fk->id }}" method="POST">
                                    @csrf
                                <input type="hidden" value="{{ $fk->id}}">
                                    <button type="submit" class="btn btn-danger ml-1">Hapus</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        <div class="container">
            <a href="{{ url('/admin/data/data-fasilitas-kesehatan') }}" class="btn btn-primary float-left mt-3">Kembali</a>
        </div>

                </div>


        </div>
      </div>
        
</div>

@endsection

@section('after-script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection
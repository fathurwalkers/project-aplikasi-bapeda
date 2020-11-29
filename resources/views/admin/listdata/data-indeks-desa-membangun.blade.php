@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">Data Indeks Desa Membangun</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kecamatan</th>
                        <th>Nama Desa</th>
                        <th>Status Desa</th>
                        <th>IDM</th>
                        <th>Tahun</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_idm as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ url('/admin/data/data-indeks-desa-membangun-filter') }}/{{ $fk->namakecamatan}}">{{ $fk->namakecamatan}}</a>
                        </td>
                        <td>{{ $fk->namadesa}}</td>
                        <td>{{ $fk->statusdesa}}</td>
                        <td>{{ $fk->indeksdesamembangun}}</td>
                        <td>{{ $fk->tahun}}</td>
                        <td class="d-inline-flex text-center">
                        <a href="{{ url('/admin/data/data-indeks-desa-membangun/edit') }}/{{$fk->id}}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/admin/data/data-indeks-desa-membangun-delete') }}/{{ $fk->id }}" method="POST">
                                @csrf
                            <input type="hidden" value="{{ $fk->id}}">
                                <button type="submit" class="btn btn-danger ml-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
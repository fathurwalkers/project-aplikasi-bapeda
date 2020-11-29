@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">Data Catatan Sipil Menurut Jenis Kelamin</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kecamatan</th>
                        <th>Tahun</th>
                        <th>Jenis Kelamin</th>
                        <th>Jumlah</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_capil_jk as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fk->kecamatan }}</td>
                        <td>{{ $fk->tahun}}</td>
                        <td>{{ $fk->jenkel}}</td>
                        <td>{{ $fk->jumlah}}</td>
                        <td class="d-inline-flex text-center">
                        <a href="{{ url('/admin/data/data-capil-jk-edit') }}/{{ $fk->id }}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/admin/data/data-capil-jk-delete') }}/{{ $fk->id }}" method="POST">
                                @csrf
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
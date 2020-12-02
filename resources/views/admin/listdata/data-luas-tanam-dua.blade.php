@extends('layouts.adminlayout')

@section('title', 'DATA LUAS TANAM')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">
            <a class="d-inline-flex btn btn-success float-right" href="{{ route('index-print-luaspanen') }}">PRINT DATA</a>
            Data Luas Panen</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tahun</th>
                        <th>Kecamatan</th>
                        <th>Padi</th>
                        <th>Padi Sawah</th>
                        <th>Padi Ladang</th>
                        <th>Jagung</th>
                        <th>Jagung Hibrida</th>
                        <th>Jagung Lokal</th>
                        <th>Ubi Kayu</th>
                        <th>Ubi Jalar</th>
                        <th>Kacang Tanah</th>
                        <th>Kacang Kedelai</th>
                        <th>Kacang Hijau</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($luas_tanamdua as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fk->tahun }}</td>
                        <td>{{ $fk->kecamatan }}</td>
                        <td>{{ $fk->padi }}</td>
                        <td>{{ $fk->padi_sawah }}</td>
                        <td>{{ $fk->padi_ladang }}</td>
                        <td>{{ $fk->jagung }}</td>
                        <td>{{ $fk->jagung_hibrida }}</td>
                        <td>{{ $fk->jagung_lokal }}</td>
                        <td>{{ $fk->ubi_kayu }}</td>
                        <td>{{ $fk->ubi_jalar }}</td>
                        <td>{{ $fk->kacang_tanah }}</td>
                        <td>{{ $fk->kacang_kedelai }}</td>
                        <td>{{ $fk->kacang_hijau }}</td>
                        <td class="d-inline-flex text-center">
                        <a href="{{ url('/admin/data/edit-luas-tanam-dua') }}/{{$fk->id}}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/admin/data/delete-luas-tanam-dua') }}/{{ $fk->id }}" method="POST">
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
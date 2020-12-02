@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">
            <a class="d-inline-flex btn btn-success float-right" href="{{ route('index-print-produksi') }}">PRINT DATA</a>
            Data Produksi Perkebunan ({{ $tahun }})</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tahun</th>
                        <th>Kecamatan</th>
                        <th>Jambu Mete (Kg)</th>
                        <th>Kakao (kg)</th>
                        <th>Kelapa Dalam (kg)</th>
                        <th>Kopi (kg)</th>
                        <th>Lada (kg)</th>
                        <th>Pala (kg)</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produksi_perkebunan as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <a href="{{ url('/admin/data/data-produksi-perkebunan') }}/{{ $fk->produksi_tahun }}">{{ $fk->produksi_tahun }}</a>
                        </td>
                        <td>{{ $fk->produksi_kecamatan}}</td>
                        <td>{{ $fk->produksi_jambu}}</td>
                        <td>{{ $fk->produksi_kakao}}</td>
                        <td>{{ $fk->produksi_kelapadalam}}</td>
                        <td>{{ $fk->produksi_kopi}}</td>
                        <td>{{ $fk->produksi_lada}}</td>
                        <td>{{ $fk->produksi_pala}}</td>
                        <td class="d-inline-flex text-center">
                            <a href="{{ url('/admin/data/data-produksi-perkebunan-edit') }}/{{ $fk->id }}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/admin/data/data-produksi-perkebunan-delete') }}/{{ $fk->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger ml-1">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container">
                <a href="{{ url('/admin/data/data-produksi-perkebunan') }}" class="btn btn-primary float-left mt-3">Kembali</a>
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
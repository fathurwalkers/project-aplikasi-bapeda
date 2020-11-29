@extends('layouts.adminlayout')

@section('title', 'Input Data')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">Data Pendidikan</h5>
        <div class="card-body">
        
            <div class="table-responsive py-3"> 
                
              <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kecamatan</th>
                        <th>Jumlah Sekolah</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Status (Negeri)</th>
                        <th>Status (Swasta)</th>
                        <th>Jumlah Murid (Laki-laki)</th>
                        <th>Jumlah Murid (Perempuan)</th>
                        <th>Status Guru (PNS)</th>
                        <th>Status Guru (non-PNS)</th>
                        <th>Jumlah Guru (Laki-laki)</th>
                        <th>Jumlah Guru (Perempuan)</th>
                        <th>Status Guru (D-3)</th>
                        <th>Status Guru (S-I)</th>
                        <th>Status Guru (S-II)</th>
                        <th>Kondisi Sekolah (Baik)</th>
                        <th>Kondisi Sekolah (Rusak)</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pendidikan as $fk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fk->namakecamatan }}</td>
                        <td>{{ $fk->jumlahsekolah}}</td>
                        <td>
                            <a href="{{ url('/admin/data/data-pendidikan') }}/{{ $fk->jenjang_pendidikan}}">{{ $fk->jenjang_pendidikan}}</a>
                        </td>
                        <td>{{ $fk->statussekolahnegeri}}</td>
                        <td>{{ $fk->statussekolahswasta}}</td>
                        <td>{{ $fk->jumlahmuridperempuan}}</td>
                        <td>{{ $fk->jumlahmuridlaki}}</td>
                        <td>{{ $fk->gurupns}}</td>
                        <td>{{ $fk->gurunonpns}}</td>
                        <td>{{ $fk->jumlahgurulaki}}</td>
                        <td>{{ $fk->jumlahguruperempuan}}</td>
                        <td>{{ $fk->gurudtiga}}</td>
                        <td>{{ $fk->gurussatu}}</td>
                        <td>{{ $fk->gurusdua}}</td>
                        <td>{{ $fk->kondisisekolahbaik}}</td>
                        <td>{{ $fk->kondisisekolahrusak}}</td>
                        <td class="d-inline-flex text-center">
                        <a href="{{ url('/admin/data/data-pendidikan-edit/edit') }}/{{$fk->id}}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('/admin/data/data-pendidikan-delete/delete') }}/{{ $fk->id }}" method="POST">
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
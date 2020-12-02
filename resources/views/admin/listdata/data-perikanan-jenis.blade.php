@extends('layouts.adminlayout')

@section('title', 'Data Perikanan Budidaya')

@section('after-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@endsection

@section('main-content')

<div class="container">

    <div class="card mt-2">
        <h5 class="card-header text-white bg-dark">
            <a class="d-inline-flex btn btn-success float-right" href="{{ route('index-print-budidaya') }}">PRINT DATA</a>
            Data Perikanan Budidaya</h5>
        <div class="card-body">

            <div class="table-responsive py-3">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Nama Kecamatan</th>
                            <th>Rumput Laut</th>
                            <th>Mabe</th>
                            <th>Kerapu</th>
                            <th>Kuwe</th>
                            <th>Lobster</th>
                            <th>Bandeng</th>
                            <th>Nila</th>
                            <th>Lele</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perikananjenis as $fk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $fk->tahun}}</td>
                            <td>{{ $fk->kecamatan }}</td>
                            <td>{{ $fk->rumput_laut}}</td>
                            <td>{{ $fk->mabe}}</td>
                            <td>{{ $fk->kerapu}}</td>
                            <td>{{ $fk->kuwe}}</td>
                            <td>{{ $fk->lobster}}</td>
                            <td>{{ $fk->bandeng}}</td>
                            <td>{{ $fk->nila}}</td>
                            <td>{{ $fk->lele}}</td>
                            <td class="d-inline-flex text-center">
                                <a href="{{ url('/admin/data/edit-perikanan-jenis') }}/{{ $fk->id }}"
                                    class="btn btn-primary">Edit</a>
                                <form action="{{ url('/admin/data/delete-perikanan-jenis') }}/{{ $fk->id }}"
                                    method="POST">
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
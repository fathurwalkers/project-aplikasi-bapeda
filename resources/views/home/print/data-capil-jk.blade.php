{{-- @extends('layouts.print-layout') --}}
@extends('layouts.homelayout')

@section('content')
<div class="div-print">

  <div class="container mb-5">
    {{-- <form action="{{ route('print-capiljk') }}" method="POST">
      @csrf
        <button type="submit" class="btn btn-primary">Print PDF</button>
      </form> --}}

      <div class="table-responsive mt-4">
        <table class="w-100 mt-4" style="color: black" border="1">
          <thead>
            <tr class="">
              <th rowspan="3" class="text-center p-1">No</th>
              <th rowspan="3" class="text-center p-1 border-1">Nama Kecamatan</th>
              <th colspan="9" class="text-center p-1">Jumlah KK</th>
            </tr>
            <tr>
              <th  class="text-center p-1">Jenis Kelamin</th>
              <th  class="text-center p-1">Jumlah</th>
              <th  class="text-center p-1">Tahun</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($capiljk as $row)
            <tr>
              <th scope="row" class="text-center">1</th>
            <td>{{ $row->kecamatan }}</td>
              <td>{{ $row->jenkel }}</td>
              <td>{{ $row->jumlah }}</td>
              <td>{{ $row->tahun }}</td>
            </tr>
            @endforeach
            
      
            
      
          </tbody>
        </table>

      </div>
    
    
    </div>


</div>
@endsection

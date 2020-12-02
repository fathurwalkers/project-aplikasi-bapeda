@extends('layouts.homelayout')
@section('title', 'SIPAPEDA Beranda')
@section('main-content')
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
    
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <div class="carousel-container animate__animated animate__fadeInDown font-italic">
                      <h2>WELCOME</h2>
                      <h2 style="line-height: 10px">TO <span> SIPAPEDA</span></h2>
                      <p style="font-size: 25px">Sistem Informasi Pengolahan Data Pembangunan Daerah.</p>
                  </div>
                </div>
            </div>

        </section>
        <!-- End Hero -->
    
        <main id="main">

          <div class="div-print">


            <div class="container mb-5">

              <a href="{{ route('index-print-capiljk')}}" class="btn btn-primary" target="_BLANK">PRINT PDF</a>
    
                <div class="table-responsive mt-4">
                  
                  <table class="w-100 mt-4" style="color: black" border="1">
                    <thead>
                      <tr class="">
                        <th rowspan="3" class="text-center p-1">No</th>
                        <th rowspan="3" class="text-center p-1 border-1">Nama Kecamatan</th>
                        <th colspan="9" class="text-center p-1">Jumlah KK</th>
                      </tr>
                      {{-- <tr>
                        <th colspan="3" class="text-center p-1">2017</th>
                        <th colspan="3" class="text-center p-1">2018</th>
                        <th colspan="3" class="text-center p-1">2019</th>
                      </tr> --}}
                      <tr>
                        <th  class="text-center p-1">Jenis Kelamin</th>
                        {{-- <th  class="text-center p-1">Jumlah</th>
                        <th  class="text-center p-1">Laki-Laki</th>
                        <th  class="text-center p-1">Perempuan</th>
                        <th  class="text-center p-1">Jumlah</th>
                        <th  class="text-center p-1">Laki-Laki</th>
                        <th  class="text-center p-1">Perempuan</th> --}}
                        <th  class="text-center p-1">Jumlah</th>
                        <th  class="text-center p-1">Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($capiljk as $row)
                      <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
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

        </main>
        <!-- End #main -->
@endsection


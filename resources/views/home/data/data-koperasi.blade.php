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
    


          <div class="container mb-4">

            <div class="card mt-2">
                <h5 class="card-header text-white bg-dark">Data Koperasi</h5>
                <div class="card-body">
                
                    <div class="table-responsive py-3"> 
                        <table class="table table-bordered table-hover">
                          <thead class="thead-dark text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kecamatan</th>
                              <th scope="col">KUD</th>
                              <th scope="col">KPRI</th>
                              <th scope="col">Koptani</th>
                              <th scope="col">Kopwan</th>
                              <th scope="col">Kopnel</th>
                              <th scope="col">Kopmu</th>
                              <th scope="col">Kop.TKBM</th>
                              <th scope="col">Kop.Pontren</th>
                              <th scope="col">Kop.Komite</th>
                              <th scope="col">KSP</th>
                              <th scope="col">Kopkar</th>
                              <th scope="col">Kopas</th>
                              <th scope="col">Primkop</th>
                              <th scope="col">Tahun</th>
                            </tr>
                
                          </thead>
                          <tbody>
        
                            @foreach ($data_koperasi as $row)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $row->kecamatan }}</td>
                              <td>{{ $row->kud }}</td>
                              <td>{{ $row->kpri }}</td>
                              <td>{{ $row->koptani }}</td>
                              <td>{{ $row->kopwan }}</td>
                              <td>{{ $row->kopnel }}</td>
                              <td>{{ $row->kopmu }}</td>
                              <td>{{ $row->kop_tkbm }}</td>
                              <td>{{ $row->kop_pontren }}</td>
                              <td>{{ $row->kop_komite }}</td>
                              <td>{{ $row->ksp }}</td>
                              <td>{{ $row->kopkar }}</td>
                              <td>{{ $row->kopas }}</td>
                              <td>{{ $row->primkop }}</td>
                              <td>{{ $row->tahun }}</td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                        </div>
        
        
                </div>
              </div>
                
        </div>



        </main>
        <!-- End #main -->
@endsection


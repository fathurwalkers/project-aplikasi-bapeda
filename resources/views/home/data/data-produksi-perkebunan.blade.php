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
                <h5 class="card-header text-white bg-dark">Data Produksi Perkebunan</h5>
                <div class="card-body">
                
                    <div class="table-responsive py-3"> 
                        <table class="table table-bordered table-hover">
                          <thead class="thead-dark text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Tahun Produksi</th>
                              <th scope="col">Nama Kecamatan</th>
                              <th scope="col">Jambu (Kg)</th>
                              <th scope="col">Kakao (Kg)</th>
                              <th scope="col">Kelapa Dalam (Kg)</th>
                              <th scope="col">Kopi (Kg)</th>
                              <th scope="col">Lada (Kg)</th>
                              <th scope="col">Pala (Kg)</th>
                            </tr>
                
                          </thead>
                          <tbody>
        
                            @foreach ($data_kebun as $row)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $row->produksi_tahun }}</td>
                              <td>{{ $row->produksi_kecamatan }}</td>
                              <td>{{ $row->produksi_jambu }}</td>
                              <td>{{ $row->produksi_kakao }}</td>
                              <td>{{ $row->produksi_kelapadalam }}</td>
                              <td>{{ $row->produksi_kopi }}</td>
                              <td>{{ $row->produksi_lada }}</td>
                              <td>{{ $row->produksi_pala }}</td>
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


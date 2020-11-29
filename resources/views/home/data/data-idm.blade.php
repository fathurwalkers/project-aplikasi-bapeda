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
                <h5 class="card-header text-white bg-dark">Data Index Desa Membangun</h5>
                <div class="card-body">
                    <div class="table-responsive py-3"> 
                      <h6 class="font-italic text-muted">Sumber Data : Dinas Pemberdayaan Masyarakat</h6>
                        <table class="table table-bordered table-hover">
                          <thead class="thead-dark text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Kecamatan</th>
                              <th scope="col">Nama Desa</th>
                              <th scope="col">Status Desa</th>
                              <th scope="col">Indeks Desa Membangun</th>
                              <th scope="col">Tahun</th>
                            </tr>
                
                          </thead>
                          <tbody>
        
                            @foreach ($data_idm as $fasilitas_kesehatan)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $fasilitas_kesehatan->namakecamatan }}</td>
                              <td>{{ $fasilitas_kesehatan->namadesa }}</td>
                              <td>{{ $fasilitas_kesehatan->statusdesa }}</td>
                              <td>{{ $fasilitas_kesehatan->indeksdesamembangun }}</td>
                              <td>{{ $fasilitas_kesehatan->tahun }}</td>
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


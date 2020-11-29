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
                <h5 class="card-header text-white bg-dark">Data Pendidikan</h5>
                <div class="card-body">
                
                    <div class="table-responsive py-3"> 
                      <h6 class="font-italic text-muted">Sumber Data : Dinas Pendidikan</h6>
                        <table class="table table-bordered table-hover">
                          <thead class="thead-dark text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Kecamatan</th>
                              <th scope="col">Jumlah Sekolah</th>
                              <th scope="col">Jenjang Pendidikan</th>
                              <th scope="col">Sekolah Negeri</th>
                              <th scope="col">Sekolah Swasta</th>
                              <th scope="col">Jumlah Murid Perempuan</th>
                              <th scope="col">Jumlah Murid Laki-laki</th>
                              <th scope="col">Guru PNS</th>
                              <th scope="col">Guru non-PNS</th>
                              <th scope="col">Jumlah Guru Laki-laki</th>
                              <th scope="col">Jumlah Guru Perempuan</th>
                              <th scope="col">Guru (D3)</th>
                              <th scope="col">Guru (S-I)</th>
                              <th scope="col">Guru (S-II)</th>
                            </tr>
                
                          </thead>
                          <tbody>
        
                            @foreach ($data_pendidikan as $fasilitas_kesehatan)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $fasilitas_kesehatan->namakecamatan }}</td>
                              <td>{{ $fasilitas_kesehatan->jumlahsekolah }}</td>
                              <td>{{ $fasilitas_kesehatan->jenjang_pendidikan }}</td>
                              <td>{{ $fasilitas_kesehatan->statussekolahnegeri }}</td>
                              <td>{{ $fasilitas_kesehatan->statussekolahswasta }}</td>
                              <td>{{ $fasilitas_kesehatan->jumlahmuridperempuan }}</td>
                              <td>{{ $fasilitas_kesehatan->jumlahmuridlaki }}</td>
                              <td>{{ $fasilitas_kesehatan->gurupns }}</td>
                              <td>{{ $fasilitas_kesehatan->gurunonpns }}</td>
                              <td>{{ $fasilitas_kesehatan->jumlahgurulaki }}</td>
                              <td>{{ $fasilitas_kesehatan->jumlahguruperempuan }}</td>
                              <td>{{ $fasilitas_kesehatan->gurudtiga }}</td>
                              <td>{{ $fasilitas_kesehatan->gurussatu }}</td>
                              <td>{{ $fasilitas_kesehatan->gurusdua }}</td>
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


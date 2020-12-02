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
            <a href="{{ route('index-print-luaspanen')}}" class="btn btn-primary" target="_BLANK">PRINT PDF</a>
            <div class="card mt-2">
              
                <h5 class="card-header text-white bg-dark">Data Luas Tanam</h5>
                <div class="card-body">
                
                    <div class="table-responsive py-3"> 
                      <h6 class="font-italic text-muted">Sumber Data : Dinas Pertanian</h6>
                        <table class="table table-bordered table-hover">
                          <thead class="thead-dark text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Kecamatan</th>
                              <th scope="col">Padi</th>
                              <th scope="col">Padi Sawah</th>
                              <th scope="col">Padi Ladang</th>
                              <th scope="col">Jagung</th>
                              <th scope="col">Jagung Hibrida</th>
                              <th scope="col">Jagung Lokal</th>
                              <th scope="col">Ubi Kayu</th>
                              <th scope="col">Ubi Jalar</th>
                              <th scope="col">Kacang Tanah</th>
                              <th scope="col">Kacang Kedelai</th>
                              <th scope="col">Kacang Hijau</th>
                            </tr>
                
                          </thead>
                          <tbody>
        
                            @foreach ($data_luastanamsatu as $row)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $row->tahun }}</td>
                              <td>{{ $row->kecamatan }}</td>
                              <td>{{ $row->padi }}</td>
                              <td>{{ $row->padi_sawah }}</td>
                              <td>{{ $row->padi_ladang }}</td>
                              <td>{{ $row->jagung }}</td>
                              <td>{{ $row->jagung_hibrida }}</td>
                              <td>{{ $row->jagung_lokal }}</td>
                              <td>{{ $row->ubi_kayu }}</td>
                              <td>{{ $row->ubi_jalar }}</td>
                              <td>{{ $row->kacang_tanah }}</td>
                              <td>{{ $row->kacang_kedelai }}</td>
                              <td>{{ $row->kacang_hijau }}</td>
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


@extends('layouts.adminlayout2')

@section('title', 'SIPAPEDA - Administrator')

@section('main-content')
<style type="text/css">
	#gradient5 {
	  background-image: linear-gradient(#FF1493, #FF1493, #FF1493);
	}
    #gradient6 {
	  background-image: linear-gradient(#000f63, #000f63, #000f63);
    }
    
    #gradient7 {
	  background-image: linear-gradient(#bb0000, #bb006d, #990148);
	}

    #gradient8 {
	  background-image: linear-gradient(#5bffc8, #00a17e, #00d460);
	}
</style>
<main>

    <div class="container-fluid">

        <h1 class="mt-4">Selamat Datang, {{ $users->name }} !</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Halaman Index Dashboard Panel untuk Admin</li>
        </ol>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-header">Data Capil - Mata Pencaharian</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_capilmp }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-capilmp') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-header">Data Capil - Jenis Kelamin</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_capiljk }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-capiljk') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-header">Data Capil - Kartu Keluarga</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_capilkk }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-capilkk') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-header">Data Fasilitas Kesehatan</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_fasilitaskesehatan }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-fasilitaskesehatan') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-header">Data Status Indeks Desa</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_indeksdesa }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-indeksdesa') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-header">Data Pariwisata</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_kunjungan }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-kunjungan') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-header">Data Pendidikan</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_pendidikan }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-pendidikan') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-header">Data Populasi Ternak</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_populasiternak }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-populasiternak') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-header">Data Produksi Perkebunan</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_produksiperkebunan }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-produksiperkebunan') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-header">Data Perikanan Hasil Tangkap</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_perikanan_komodity }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-perikanan-komodity') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-header">Data Perikanan Budidaya</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_perikanan_jenis }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-perikanan-jenis') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div id="gradient5" class="text-white mb-4">
                    <div class="card-header">Data Koperasi</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_koperasi }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-koperasi') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div  class="col-xl-3 col-md-6">
                <div id="gradient6" class="text-white mb-4">
                    <div class="card-header">Data Luas Tanam</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_luastanamsatu }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-luas-tanam-satu') }}">View
                            Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div id="gradient6" class="text-white mb-4">
                    <div class="card-header">Data Luas Panen</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_luastanamdua }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-luas-tanam-dua') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div id="gradient7" class="text-white mb-4">
                    <div class="card-header">Data Situs Cagar Budaya</div>
                    <div class="card-body text-center">
                        <h4>{{ $data_cagarbudaya }} Data</h4>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('data-cagar-budaya') }}">View Details</a>
                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                </path>
                            </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-xl-3 col-md-6">
                    <div id="gradient8" class="text-white mb-4">
                        <div class="card-header">Data Perdagangan</div>
                        <div class="card-body text-center">
                            <h4>{{ $data_perdagangan }} Data</h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('data-cagar-budaya') }}">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            

        </div>

    </div>

</main>
@endsection
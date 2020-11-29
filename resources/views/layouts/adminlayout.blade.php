<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        @yield('after-style')
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand" href="index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Lambang_Kabupaten_Buton.png/340px-Lambang_Kabupaten_Buton.png" class="img-responsive" width="50px" height="45px"> SIPAPEDA</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    {{-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> --}}
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ url('/admin/logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item has-icon text-danger">
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">

                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    
                    <div class="sb-sidenav-menu">

                        <div class="nav">

                            {{-- Halaman Dashboard Admin  --}}
                            <a class="nav-link" href="{{ url('/admin') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>


                            {{-- Tampilkan Data  --}}
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                List Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    @if ($users->level == 'dinas_pendidikan')
                                    <a class="nav-link" href="{{ url('/admin/data/data-pendidikan') }}">Pendidikan</a>
                                    @endif

                                    @if ($users->level == 'dinas_kesehatan')
                                    <a class="nav-link" href="{{ url('/admin/data/data-fasilitas-kesehatan') }}">Fasilitas Kesehatan</a>
                                    @endif

                                    @if ($users->level == 'dinas_pariwisata')
                                    <a class="nav-link" href="{{ url('/admin/data/data-kunjungan') }}">Parawisata</a>
                                    @endif

                                    @if ($users->level == 'dinas_pertanian')
                                    <a class="nav-link" href="{{ url('/admin/data/data-produksi-perkebunan') }}">Produk Perkebunan</a>
                                    <a class="nav-link" href="{{ url('/admin/data/data-populasi-ternak') }}">Data Populasi Ternak</a>
                                    <a class="nav-link" href="{{ route('data-luas-tanam-satu') }}">Data Luas Tanam</a>
                                    <a class="nav-link" href="{{ route('data-luas-tanam-dua') }}">Data Luas Panen</a>
                                    @endif

                                    @if ($users->level == 'dinas_pemberdayaanmasyarakat')
                                    <a class="nav-link" href="{{ url('/admin/data/data-indeks-desa-membangun') }}">Indeks Desa Membangun</a>
                                    @endif

                                    @if ($users->level == 'dinas_perikanan')
                                    <a class="nav-link" href="{{ route('data-perikanan-komodity') }}">Data Perikanan Tangkap</a>
                                    <a class="nav-link" href="{{ route('data-perikanan-jenis') }}">Data Perikanan Budidaya</a>
                                    @endif

                                    @if ($users->level == 'dinas_capil')
                                    <a class="nav-link" href="{{ url('/admin/data/data-capil-mp') }}">Data Capil Berdasarkan Mata Pencaharian</a>

                                    <a class="nav-link" href="{{ url('/admin/data/data-capil-kk') }}">Data Capil Berdasarkan Kartu Keluarga</a>

                                    <a class="nav-link" href="{{ url('/admin/data/data-capil-jk') }}">Data Capil Berdasarkan Jenis Kelamin</a>
                                    @endif

                                    @if ($users->level == 'dinas_kebudayaan')
                                    <a class="nav-link" href="{{ route('data-cagar-budaya') }}">Data Situs Cagar Budaya</a>
                                    @endif 

                                    @if ($users->level == 'dinas_koperasi')
                                    <a class="nav-link" href="{{ route('data-koperasi') }}">Data Koperasi</a>
                                    @endif

                                </nav>
                            </div>


                            {{-- Input Data  --}}
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Input Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if ($users->level == 'dinas_pendidikan')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-pendidikan') }}">Pendidikan</a>
                                    @endif

                                    @if ($users->level == 'dinas_kesehatan')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-fasilitas-kesehatan') }}">Fasilitas Kesehatan</a>
                                    @endif

                                    @if ($users->level == 'dinas_pariwisata')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-kunjungan') }}">Data Kunjungan</a>
                                    @endif

                                    @if ($users->level == 'dinas_pertanian')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-produksi-perkebunan') }}">Produk Perkebunan</a>
                                    <a class="nav-link" href="{{ route('input-luas-tanam-satu') }}">Data Luas Tanam</a>
                                    <a class="nav-link" href="{{ route('input-luas-tanam-dua') }}">Data Luas Panen</a>
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-populasi-ternak') }}">Data Populasi Ternak</a>
                                    @endif

                                    @if ($users->level == 'dinas_pemberdayaanmasyarakat')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-indeks-desa-membangun') }}">Indeks Desa Membangun</a>
                                    @endif

                                    @if ($users->level == 'dinas_perikanan')
                                    <a class="nav-link" href="{{ route('input-perikanan-komodity') }}">Data Perikanan Tangkap</a>
                                    <a class="nav-link" href="{{ route('input-perikanan-jenis') }}">Data Perikanan Budidaya</a>
                                    @endif

                                    @if ($users->level == 'dinas_capil')
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-capil-mp') }}">Data Capil Berdasarkan Mata Pencaharian</a>
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-capil-kk') }}">Data Capil Berdasarkan Kartu Keluarga</a>
                                    <a class="nav-link" href="{{ url('/admin/data/input-data-capil-jk') }}">Data Capil Berdasarkan Jenis Kelamin</a>
                                    @endif

                                    @if ($users->level == 'dinas_kebudayaan')
                                    <a class="nav-link" href="{{ route('input-cagar-budaya') }}">Data Situs Cagar Budaya</a>
                                    @endif

                                    @if ($users->level == 'dinas_koperasi')
                                    <a class="nav-link" href="{{ route('input-data-koperasi') }}">Data Koperasi</a>
                                    @endif
                        
                                </nav>
                            </div>

                        </div>

                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('after-script')
    </body>
</html>

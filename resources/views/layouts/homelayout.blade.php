<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/moderna/assets/img/logo1.png') }}" rel="icon">
    <link href="{{ asset('assets/moderna/assets/img/logo1.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/moderna/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/moderna/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/moderna/assets/css/style.css') }}" rel="stylesheet">
    <style>
        @media print {
            body * {
                //sembunyikan bagian body
                visibility: hidden;
                display: none;
            }

            .div-print,
            #div-print * {
                //tampilkan bagian #div-print, dan semua childnya (*)
                visibility: visible;
            }

            .div-print {
                //atur posisi di kiri atas (mentok)... 
                position: absolute;
                font-family: verdana;
                left: 0;
                top: 0;
            }
        }
    </style>
    @yield('after-style')
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">
            <div class="logo float-left">
                <h1 class="text-light"><a href="{{ route('home') }}"><span><img
                                src="{{ asset('assets/moderna/assets/img/logo1.png') }}" alt="Responsive image">
                            SIPAPEDA</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href=""><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-xl-right  d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="drop-down"><a href="#">Repository</a>
                        <ul>
                            <li><a href="{{ url('/home/data-pendidikan') }}">Dinas Pendidikan</a></li>
                            <li class="drop-down"><a href="#">Dinas Kesehatan</a>
                                        <ul>
                                            <li><a href="{{ url('/home/data-fasilitas-kesehatan') }}">Fasilitas Kesehatan</a></li>
                                        </ul>
                            </li>

                            <li class="drop-down"><a href="#">Dinas Kebudayaan</a>
                                        <ul>
                                            <li><a href="{{ route('home-data-cagar-budaya') }}">Situs Cagar Budaya</a></li>
                                        </ul>
                            </li>
                            <li class="drop-down"><a href="#">Dinas Pertanian</a>
                                <ul>
                                            <li><a href="{{ route('home-data-luas-tanam-satu') }}">Luas Tanam</a></li>
                                            <li><a href="{{ route('home-data-luas-tanam-dua') }}">Jumlah Panen</a></li>
                                            <li><a href="{{ route('home-data-produksi-perkebunan') }}">Produksi Perkebunan</a></li>
                                            <li><a href="{{ route('home-data-populasi-ternak') }}">Populasi Ternak</a></li>
                                        </ul>
                            </li>
                            <li class="drop-down"><a href="#">Dinas Perikanan</a>
                                        <ul>
                                            <li><a href="{{ route('home-data-perikanan-komodity') }}">Tangkap</a></li>
                                            <li><a href="{{ route('home-data-perikanan-jenis') }}">Budidaya</a></li>
                                        </ul>
                            </li>
                            <li class="drop-down"><a href="#">Dinas Pariwisata</a>
                                        <ul>
                                            <li><a href="{{ route('home-data-pariwisata') }}">Jumlah Kunjungan</a></li>
                                        </ul> 
                            </li>
                            <li class="drop-down"><a href="#">Dinas Koperasi</a>
                                        <ul>
                                            <li><a href="{{ route('home-data-koperasi') }}">Sebaran Koperasi</a></li>
                                        </ul> 
                            </li>
                            <li class="drop-down"><a href="#">Dinas Catatan Sipil</a>
                                        <ul>
                                            <li><a href="{{ url('/home/data-capil-kk') }}">Jumlah KK Total</a></li>
                                            <li><a href="{{ url('/home/data-capil-mp') }}">Jumlah KK Berdasarkan Mata Pencaharian</a></li>
                                            <li><a href="{{ url('/home/data-capil-jk') }}">Jumlah KK Berdasarkan Jenis Kelamin</a></li>
                                        </ul>
                            </li>
                            <li class="drop-down"><a href="#">Dinas Pemberdayaan Masyarakat</a>
                                        <ul>
                                            <li><a href="{{ url('/home/data-idm') }}">IDM</a></li>
                                        </ul>
                            </li>
                        <li><a href="{{ route('home-data-perdagangan') }}">Dinas Perdagangan</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ url('/admin/login') }}" class="btn btn-success mx-lg-1 py-2">Login</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->
    @yield('main-content')

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


        {{-- <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Moderna</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/moderna/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/moderna/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/moderna/assets/js/main.js') }}"></script>

</body>

</html>
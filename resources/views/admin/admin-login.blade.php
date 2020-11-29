{{-- <!DOCTYPE html> --}}
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 01:34:03 GMT -->
<!-- Added by HTTrack -->
{{-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> --}}
<!-- /Added by HTTrack -->

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="icon" type="image/png" href="{{ asset('assets/login/images/icons/favicon.ico') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animsition/css/animsition.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/vendor/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login/css/main.css') }}">

</head>

<body>
    {{-- <div class="limiter"> --}}
    <div class="container-login100" style="background-image: url('{{ asset('/assets/login/images/bg-01.jpeg') }}');">
        <div class="wrap-login100">

            <form action="{{ url('/admin/login') }}" method="POST">
                @csrf
                <span class="login100-form-logo">
                    <img src="{{ asset('assets/login/images/logo1.png') }}" class="img-fluid" width="80">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                    SIPAPEDA
                    <p class="text-center text-white">Sistem Informasi Pengolahan Data Pembangunan Daerah</p>
                </span>
                <div class="wrap-input100">
                    <input name="username" class="input100" type="text" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div class="wrap-input100">
                    <input name="password" class="input100" type="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>
    {{-- </div> --}}

    <script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.jss') }}"></script>

    <script src="{{ asset('assets/login/vendor/animsition/js/animsition.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/countdowntime/countdowntime.js') }}"></script>

    <script src="{{ asset('assets/login/js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 01:34:12 GMT -->

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siremender Polres Tegal</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    @stack('css')
    @livewireStyles
    <style>
        .bg-image-polres{
            position: relative;
            z-index: 1;
        }

        .bg-image-polres::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: url("/dist/img/bg.jpg") round;
        }
    </style>
</head>
<body>

<section class="header bg-danger shadow-sm">
    <div class="shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-danger d-flex flex-row">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('dist/img/logo.png')}}" height="30px" width="auto" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav navbar-better">
                        <li class="nav-item active current-page">
                            <a class="nav-link font-weight-bold" href="/">
                                <button class="btn btn-outline-light btn-sm">OFFICIAL WEBSITE</button>
                            </a>


                        </li>

                        <li class="nav-item active current-page">
                            <a class="nav-link text-white" href="mailto:info@polrestegal.id">
                                <button class="btn btn-outline-light btn-sm">info@polrestegal.id</button>
                            </a>
                        </li>

                        <li class="nav-item active current-page">
                            <a class="nav-link" href="tel:(0283)491111">
                                <button class="btn btn-outline-light btn-sm">(0283) 491111</button></a>

                        </li>
                    </ul>
                </div>
            </nav>

        </div><!-- .container -->

    </div><!-- .shadow-sm -->

</section>
{{$slot}}
<footer class="footer bg-dark text-white py-3">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="https://polrestegal.id/wp-content/uploads/2021/08/logo-bawaha-1.png" alt="">
            </div>
            <div class="col-md-3">
                <h5 class="border-bottom">Kontak Kami</h5>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marked"></i> Jl. AIP KS Tubun No.3, Kalijembangan, Pakembaran, Kec. Slawi, Tegal, Jawa Tengah 52415</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="border-bottom">Lokasi</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126727.48392640255!2d109.06179665820314!3d-6.9817054999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbee53fffffff%3A0x5f275e812cd2249f!2sPolres%20Tegal!5e0!3m2!1sid!2sid!4v1629378164476!5m2!1sid!2sid" width="auto" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <span class="text-muted">2021 SIMENDER by <a href="https://polrestegal.id">Polres Tegal</a>.</span>
    </div>
</footer>


<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
@livewireScripts
@stack('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</script>
<x-livewire-alert::scripts />
</body>
</html>

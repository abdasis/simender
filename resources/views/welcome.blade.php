<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web Pendaftaran Notifikasi SIM dan STNK</title>
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
            opacity: .09;
            z-index: -1;
            background: url("https://polrestegal.id/wp-content/uploads/2021/08/7447e91a-4c9f-4d5e-90bb-b5dba6265f4c.jpg") no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-light ">
<div class="bg-image-polres">
    <section class="header bg-danger shadow-sm">
        <div class="shadow-sm">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-danger d-flex flex-row">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="https://polrestegal.id/wp-content/uploads/2021/08/logo.png" height="30px" width="auto" alt="Logo">
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
    <div class="container" id="form-wrapper">
        <div class="row justify-content-center" style="min-height: 92vh">
            <div class="col-md-5 col-sm-12 mx-auto my-auto" >
                <div class="card border-0 shadow-sm ">
                    <div class="card-header border-light bg-white text-center">
                        <h5>Pilih Jenis Layanan</h5>
                    </div>
                    <div class="card-body p-5">
                        <div class="alert alert-info">
                            Selamat Data di Sistem Pengingat Perpanjangan SIM dan STNK silahkan pilih layanan dibawah untuk mendaftar
                        </div>
                        <a href="{{route('pendaftaran.sim')}}" class="d-grid gap-2 mb-3">
                            <button class="btn btn-light">Reminder SIM</button>
                        </a>

                        <a href="{{route('pendaftaran.stnk')}}">
                            <div class="d-grid gap-2">
                                <button class="btn btn-light">Reminder STNK</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

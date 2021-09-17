<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body class="bg-light">
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
<footer class="footer bg-white py-3">
    <div class="container">
        <span class="text-muted">2021 SIMENDER by <a href="https://facebook.com/abdasispif">King Aziz</a>.</span>
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

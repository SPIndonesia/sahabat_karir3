<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $judul }}
    </title>

    <!-- --------------- css --------------- -->
    <link rel="stylesheet" href="{{ asset('assets/css/templates/admin.css') }}">

    @foreach ($css as $style)
    <link rel="stylesheet" href="{{ asset('assets/css/'.$style.'.css') }}">
    @endforeach
    <link rel="shortcut icon" href="{{asset('assets/img/icon/logo-sk.png')}}">
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="{{ asset('assets/img/icon/logo-sk.png') }}" alt="sahabat karir">
            <h1>Sahabat Karir</h1>
        </div>

        <div class="profil-admin">
            <i class="fa-solid fa-bell"></i>

            <div class="info-admin">
                <div class="foto-admin">
                    <img src="" alt="">
                </div>

                <div class="nama-admin">
                    <h4>Nama Admin</h4>
                    <p>Admin Bengkulu</p>
                </div>
            </div>
        </div>
    </header>

    <section class="sec-beranda">
        <nav class="navigasi-beranda">
            <ul>
                <li class="nav" data-target="admin/user">
                    <i class="fa-solid fa-house-user"></i>
                    <h2>Dashboard</h2>
                </li>

                <li class="nav" data-target="admin/user">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Data Peserta</h2>
                </li>

                <li class="nav" data-target="admin/kategori">
                    <i class="fa-solid fa-layer-group"></i>
                    <h2>Kategori</h2>
                </li>

                <li class="nav" data-target="admin/paket">
                    <i class="fa-solid fa-box-archive"></i>
                    <h2>Paket</h2>
                </li>

                <li class="nav" data-target="admin/kelas">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <h2>Kelas</h2>
                </li>

                <li class="nav" data-target="admin/testimoni">
                    <i class="fa-solid fa-star"></i>
                    <h2>Testimoni</h2>
                </li>

                <li class="nav" data-target="pembayaran">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <h2>Pembayaran</h2>
                </li>
            </ul>
        </nav>

        @yield('content')

    </section>

    <!-- --------------- js --------------- -->
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"> </script>
    <script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="{{ asset('assets/js/template.js') }}"></script>


    @foreach ($js as $script)
    <script src="{{ asset('assets/js/'. $script.'.js') }}"></script>
    @endforeach
</body>

</html>
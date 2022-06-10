<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $judul }}
    </title>
    <link rel="shortcut icon" href="{{asset('assets/img/icon/logo-sk.png')}}">

    {{------------------------ My css ------------------------}}
    <link rel="stylesheet" href="{{ asset('assets/css/templates/admin.css') }}">

    @if ($css)
    @foreach ($css as $s)
    <link rel="stylesheet" href="{{ asset('assets/css/pages/admin/'.$s.'.css') }}">
    @endforeach
    @endif
</head>

<body>
    <header>
        <div class="profil-admin">
            <div class="notifi">
                <i class="fa-solid fa-bell"></i>
            </div>

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

    <nav class="navigasi-admin">
        <div class="logo">
            <img src="{{ asset('assets/img/icon/logo-sk.png') }}" alt="sahabat karir">
            <h1>Sahabat Karir</h1>
        </div>

        <a href="/admin/beranda">
            <i class="fa-solid fa-house-user"></i>
            <h2>Beranda</h2>
        </a>

        <a href="/admin/user">
            <i class="fa-solid fa-people-group"></i>
            <h2>Data Peserta</h2>
        </a>

        <a href="/admin/kategori">
            <i class="fa-solid fa-layer-group"></i>
            <h2>Kategori</h2>
        </a>

        <a href="/admin/paket">
            <i class="fa-solid fa-box-archive"></i>
            <h2>Paket</h2>
        </a>

        <a href="/admin/kelas">
            <i class="fa-solid fa-chalkboard-user"></i>
            <h2>Kelas</h2>
        </a>

        <a href="/admin/testimoni">
            <i class="fa-solid fa-star"></i>
            <h2>Testimoni</h2>
        </a>

        <a href="/admin/pembayaran">
            <i class="fa-solid fa-money-check-dollar"></i>
            <h2>Pembayaran</h2>
        </a>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"> </script>
    <script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="{{ asset('assets/js/templates/template.js') }}"></script>

    {{---------------------------- My script ----------------------------}}
    @foreach ($js as $sc)
    <script src="{{ asset('assets/js/admin/'. $sc.'.js') }}"></script>
    @endforeach
</body>

</html>
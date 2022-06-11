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
    <link rel="stylesheet" href="{{ asset('assets/css/'.$s.'.css') }}">
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

    @if (session('status'))
    <div class="alert alert-success" data-alert="{{ session('status') }}"></div>
    @endif

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

        <a href="/admin/jumbotron">
            <i class="fa-solid fa-photo-film"></i>
            <h2>Jumbotron</h2>
        </a>

        <a href="/admin/keunggulan">
            <i class="fa-solid fa-rectangle-ad"></i>
            <h2>Keunggulan Kami</h2>
        </a>

        <a href="/admin/about">
            <i class="fa-solid fa-star"></i>
            <h2>Tentang Kami</h2>
        </a>

        <a href="/admin/testimoni">
            <i class="fa-solid fa-comment"></i>
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

    <script src="{{ asset('assets/js/templates/adminFunc.js') }}"></script>
    <script src="{{ asset('assets/js/templates/template.js') }}"></script>

    {{---------------------------- My script ----------------------------}}
    @foreach ($js as $sc)
    <script src="{{ asset('assets/js/'. $sc.'.js') }}"></script>
    @endforeach
</body>

</html>
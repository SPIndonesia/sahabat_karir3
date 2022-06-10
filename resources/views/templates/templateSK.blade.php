<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
        data-client-key="<Mid-client-j6xwra16OXDlv3sl>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>




    <title>
        <?= $judul ?>
    </title>
    <link rel="shortcut icon" href="{{asset('assets/img/icon/logo-sk.png')}}">



    {{--------------------------- External css ---------------------------}}
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    {{--------------------------- My css ---------------------------}}
    <link rel="stylesheet" href="{{asset('assets/css/templates/home.css')}}">
    @if ($css)
    @foreach ($css as $s)
    <link rel="stylesheet" href="{{ asset('assets/css/' . $s . '.css') }}">
    @endforeach
    @endif
</head>

<body>
    <header>
        <div class="header-left">
            <div class="logo">
                <img src="{{asset('assets/img/icon/logo-sk.png')}}" alt="sahabat karir">
            </div>

            <nav class="nav-header" id="nav">
                <a href="kelas">Kelas</a>
                <a href="tentang-kami">Tentang Kami</a>
                <a href="pelanggan">Pelanggan</a>
            </nav>
        </div>

        <div class="header-right">
            <div class="aksi">
                <div class="user-icon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="dropdown">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>

            <div class="tombol">
                @if (Auth::user())

                @if (Auth::user()->role=='admin')
                <a href="{{ route('admin') }}" class="admin">Admin</a>
                <a href="" class="logout">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endif
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endif
            </div>

            <div class="keranjang">
                <a href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </header>



    @yield('content')


    <!-- --------------- Footer --------------- -->
    <footer>
        <div class="judul__footer">
            <img src="{{asset('assets/img/icon/logo-sk.png')}}" alt="sahabat-karir-logo">
            <h2>SAHABAT KARIR</h2>
        </div>

        <div class="konten__footer">
            <div class="navigasi__footer">
                <h3>Navigasi</h3>

                <ul>
                    <li>
                        <a href="">Kelas</a>
                    </li>

                    <li>
                        <a href="">Tentang Kami</a>
                    </li>

                    <li>
                        <a href="">Pelanggan</a>
                    </li>
                </ul>
            </div>

            <div class="sosmed">
                <h3>Sosial Media</h3>

                <ul>
                    <li>
                        <a href="https://www.instagram.com/sahabatkarirrofficial/" target="_blank">@
                            sahabatkarirrofficial</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sahabat_ikadin/" target="_blank">@ sahabat_ikadin</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sahabatpolri/" target="_blank">@ sahabatpolri</a>
                    </li>
                </ul>
            </div>

            <div class="kontak">
                <h3>Hubungi Kami</h3>

                <ul>
                    <li>+62 822-8867-2331</li>
                    <li>+62 811-7312-300</li>
                </ul>
            </div>

            <div class="alamat">
                <h3>Alamat</h3>

                <ul>
                    <li class="email">
                        <a target="_blank"
                            href="mailto:sahabatprofesionalindonesia@gmail.com">sahabatprofesionalindonesia@gmail.com</a>
                    </li>

                    <li class="lokasi">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                        </svg>
                        <p>
                            Jalan Kerapu Nomor 44 Kelurahan Berkas Kecamatan Teluk Segara Kota Bengkulu
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    {{--------------------------- My js ---------------------------}}
    @if ($js)
    @foreach ($js as $sc)
    <script src="{{ asset('assets/js/' . $sc . '.js') }}"></script>
    @endforeach
    @endif
</body>

</html>
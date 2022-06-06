<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAHABAT KARIR</title>

    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="<Mid-client-j6xwra16OXDlv3sl>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- --------------- icon website --------------- -->
    <link rel="shortcut icon" href="{{asset('assets/img/icon/logo-sk.png')}}">

    <!-- --------------- slick slider --------------- -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!-- --------------- css --------------- -->
    <link rel="stylesheet" href="{{asset('assets/css/landingPage.css')}}">
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="{{asset('assets/img/icon/logo-sk.png')}}" alt="sahabat karir">
        </div>

        <nav class="navigasi-halaman-landing" id="nav">
            <a href="kelas">Kelas</a>
            <a href="tentang-kami">Tentang Kami</a>
            <a href="pelanggan">Pelanggan</a>
        </nav>

        <form class="pencarian" action="" method="POST">
            <input type="text" placeholder="Searching">

            <svg class="icon-cari" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
            </svg>

            <button class="header__cari" type="submit" hidden></button>
        </form>

        <a href="keranjangBelanja.html" class="keranjang-belanja">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>

        <div class="hamburger-navigasi">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
            </svg>
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
                        <a target="_blank" href="mailto:sahabatprofesionalindonesia@gmail.com">sahabatprofesionalindonesia@gmail.com</a>
                    </li>

                    <li class="lokasi">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                        </svg>
                        <p>
                            Jalan Kerapu Nomor 44 Kelurahan Berkas Kecamatan Teluk Segara Kota Bengkulu
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- --------------- jquery - slick - slider --------------- -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!-- --------------- js --------------- -->
    <script src="https://kit.fontawesome.com/02db274a60.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/landingPage.js')}}"></script>
</body>

</html>

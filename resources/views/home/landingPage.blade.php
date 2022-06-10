@extends('templates.templateSK')

@section('content')

@if(session('alert-success'))
<script>
    alert("{{session('alert-success')}}")
</script>
@elseif(session('alert-failed'))

<script>
    alert("{{session('alert-failed')}}")
</script>
@endif

<!----------------- Jumbotron ----------------->
<div class="konten pembungkus-jumbotron">
    <div class="jumbotron-slider__arrow go-back">
        <img src="assets/img/icon/backward.png" alt="go back">
    </div>

    <div class="jumbotron jumbotron-slider">
        <div class="jumbotron-konten">
            <img src="assets/img/landingPage/1.jpg" alt="sahabat karir">
        </div>

        <div class="jumbotron-konten">
            <img src="assets/img/landingPage/2.jpg" alt="sahabat karir">
        </div>

        <div class="jumbotron-konten">
            <img src="assets/img/landingPage/1.jpg" alt="sahabat karir">
        </div>

        <div class="jumbotron-konten">
            <img src="assets/img/landingPage/2.jpg" alt="sahabat karir">
        </div>
    </div>

    <div class="jumbotron-slider__arrow go-next">
        <img src="assets/img/icon/forward.png" alt="go next">
    </div>
</div>


<!-- --------------- Gabung Bersama Kami --------------- -->
<div class="konten gabung-bersama-kami" id="kelas">
    <div class="pembungkus-judul">
        <h1 class="judul">Ayo bergabung bersama kami!</h1>
        <h3 class="sub-judul">Pilih kelas sesuai cita-cita mu</h3>
    </div>

    <div class="pembungkus-konten__gabung-bersama-kami">
        @foreach ($kategories as $kategori)
        <div class="konten__gabung-bersama-kami">
            <img class="konten-logo" src="{{ asset('assets/img/kategori/' . $kategori->gambar_paket) }}"
                alt="kelas cpns">
            <h1>{{ $kategori->nama }}</h1>
            <div class="lihat-kelas">
                <p>{{ $kategori->deskripsi }}</p>
                <a href="{{ route('landingPaket', $kategori->id_kategori) }}" title="Kunjungi">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>



<!-- --------------- Tentang Kami --------------- -->
<div class="konten tentang-kami" id="tentang-kami">
    <div class="pembungkus-judul">
        <h1 class="judul">Tentang Kami</h1>
        <h3 class="sub-judul">Sahabat karir merupakan bimbel online terbaik dengan banyak pilihan kelas. Ayo
            wujudkan mimpi mu bersama sahabat karir</h3>
    </div>

    <div class="konten__tentang-kami">
        <div>
            <h2>Visi</h2>

            <div class="visi">
                <div>
                    <p>1</p>
                    <p>Menjadi mitra yang dinamis bagi klien dalam konsultansi & pengembangan SDM secara
                        professional.</p>
                </div>

                <div>
                    <p>2</p>
                    <p>Menjadi perusahaan terbaik dalam bidang pengembangan Sumber Daya Manusia yang mempunyai daya
                        saing dan Inovasi untuk peningkatan produktivitas pelanggan.</p>
                </div>
            </div>
        </div>

        <div>
            <h2>Misi</h2>

            <div class="misi">
                <div>
                    <p>1</p>
                    <p>Memberikan layanan psikologi sebaik-baiknya dengan memperlakukan konsumen sebagai mitra
                        terbaik.</p>
                </div>

                <div>
                    <p>2</p>
                    <p>Berperan aktif menemukan potensi yang dimiliki baik diri maupun perusahaan dalam
                        mencapai tujuannya.</p>
                </div>

                <div>
                    <p>3</p>
                    <p>Mengembangkan layanan psikologi dengan membangun kemitraan seluas-luasnya.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- --------------- Kenapa Harus Kami --------------- -->
<div class="konten kenapa-harus-kami">
    <div class="pembungkus-judul">
        <h1 class="judul">Kenapa Harus Kami</h1>
    </div>

    <div class="pembungkus-konten__kenapa-harus-kami">
        <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="kartu">
            <img src="assets/img/dokumenPerusahaan/sertifikat-1.jpg" alt="tersertifikasi">
            <h2>Tersertifikasi</h2>
        </div>
        <?php endfor ?>
    </div>
</div>

<!-- --------------- Cerita Dari Sahabat --------------- -->
<div class="konten cerita-dari-sahabat" id="pelanggan">
    <div class="pembungkus-judul">
        <h1 class="judul">Cerita Dari Sahabat</h1>
        <h3 class="sub-judul">Cerita Dari Sahabat Yang Lulus</h3>
    </div>

    <div class="pembungkus-konten__cerita-dari-sahabat">
        <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="konten__cerita-dari-sahabat">
            <div class="profil-pengguna mb">
                <img src="assets/img/alumni/alumni1.png" alt="profil user">
            </div>

            <div class="info-pengguna mb">
                <h2 class="mb">Febridilla Nurul Masyita</h2>
                <h2 class="mb">Lulus SBMPTN</h2>
                <div class="rating" data-skorRating="4.5"></div>
            </div>

            <div class="tanggapan-mereka mb">
                <p>
                    “Materi yang diberikan sangat mudah dipahami sehingga memudahkan aku dalam belajar”
                </p>
            </div>
        </div>
        <?php endfor ?>
    </div>
</div>

@endsection
@extends('templates.templateAdminSK')

@section('content')

<div class="konten-beranda">
    <div class="sec-one">
        <div class="kartu">
            <div class="info">
                <div class="icon">
                    <img src="assets/img/icon/income.png" alt="income">
                </div>

                <div class="harga">
                    <a href="">
                        <h1>Income</h1>
                    </a>

                    <p>35.000.000</p>
                </div>
            </div>

            <div class="persentase">
                <span>20%</span>
                <i class="fa-solid fa-arrow-up-long"></i>
            </div>
        </div>

        <div class="kartu">
            <div class="info">
                <div class="icon">
                    <img src="assets/img/icon/jumlah-peserta.png" alt="jumlah peserta">
                </div>

                <div class="harga">
                    <a href="">
                        <h1>Jumlah Peserta</h1>
                    </a>

                    <p>200 Orang</p>
                </div>
            </div>

            <div class="persentase">
                <span>15%</span>
                <i class="fa-solid fa-arrow-up-long"></i>
            </div>
        </div>

        <div class="kartu">
            <div class="info">
                <div class="icon">
                    <img src="assets/img/icon/kategori.png" alt="kategori">
                </div>

                <div class="harga">
                    <a href="">
                        <h1>Kategori</h1>
                    </a>

                    <p>5</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sec-two kartu">
        <div class="judul">
            <h1>Data Pendaftar</h1>
        </div>

        <div class="konten">
            <div id="bagan"></div>

            <div class="list-kategori">
                <form action="">
                    <select name="filterListKategori">
                        <option value="SBMPTN">SBMPTN</option>
                        <option value="CPNS">CPNS</option>
                        <option value="POLRI">POLRI</option>
                        <option value="IKADIN">IKADIN</option>
                        <option value="PELATIHAN">PELATIHAN</option>
                    </select>

                    <button type="submit" hidden></button>
                </form>

                <ul>
                    <li style="--warna-kotak:#FF6D6D">SBMPTN</li>
                    <li style="--warna-kotak:#8080FF">CPNS</li>
                    <li style="--warna-kotak:#00DBFF">POLRI</li>
                    <li style="--warna-kotak:#00FF83">IKADIN</li>
                    <li style="--warna-kotak:#00FF00">PELATIHAN</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
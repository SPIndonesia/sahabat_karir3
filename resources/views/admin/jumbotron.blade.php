@extends('templates.templateadminSK')

@section('content')

<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Jumbotron Gambar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <button type="submit" hidden></button>
        </form>
    </div>

    <div class="print">
        <i class="fa-solid fa-print"></i>
    </div>
</div>

<div class="sec-two">
    <div class="judul">
        <h1>Jumbotron</h1>
        <a href="" class="tombol-tambah">Tambah Data</a>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php for ($i = 1; $i < 3; $i++) : ?>
                <tr data-id="">
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <img src="{{ asset('assets/img/landingPage/1.jpg') }}" alt="Gambar Jumbotron">
                    </td>
                    <td>
                        <div class="aksi">
                            <div class="ubah" data-kategori="">
                                <i class="ubah fa-solid fa-pen"></i>
                            </div>

                            <div class="hapus">
                                <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <i class="hapus fa-solid fa-trash"></i>

                                    <button type="submit" name="hapus" hidden></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endfor ?>
            </tbody>
        </table>

        <div class="next-prev">
            <a href="" class="prev">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <a href="" class="next">
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="_popup">
    <div class="popup">
        <div class="tombol-close">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="konten">
            <div class="judul">
                <h1>Tambah Data</h1>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <ul class="form">
                    <li class="gambar">
                        <img src="" alt="Gambar Jumbotron">
                    </li>

                    <li class="upload-gambar">
                        <p>Masukkan Gambar Kategori</p>
                        <input class="" accept=".png,.jpg" type="file" name="gambar_kategori" hidden>
                    </li>

                    <li class="tombol-simpan">
                        <button type="submit">Simpan</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

@endsection
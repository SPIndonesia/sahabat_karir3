@extends('templates.templateadminSK')

@section('content')

<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Testimoni atau Alumni">
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
        <h1>Tabel Testimoni</h1>
        <a href="" class="tombol-tambah">Tambah Data</a>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto Alumni</th>
                    <th>Lulusan</th>
                    <th>Rating</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                <tr data-id="">
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <img src="{{ asset('assets/img/alumni/alumni1.png') }}" alt="Gambar Testimoni">
                    </td>
                    <td>Lulusan SBMPTN</td>
                    <td>Ada Adha</td>
                    <td>3.5</td>
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
                    <li class="upload-gambar">
                        <p>Foto User</p>
                        <input class="" accept=".png,.jpg" type="file" name="" hidden>
                    </li>

                    <li>
                        <label for="nama">Lulusan : </label>
                        <input class="kategori-nama" type="text" placeholder="Masukkan Nama Kategori" name="nama"
                            autocomplete="off">
                    </li>

                    <li>
                        <label for="deskripsi">Rating : </label>
                        <input class="" type="text" placeholder="Masukkan Nama Kategori" name="deskripsi"
                            autocomplete="off">
                    </li>

                    <li>
                        <label for="deskripsi">Deskripsi : </label>
                        <textarea name="" id="" autocomplete="off"></textarea>
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
@extends('templates.templateadminSK')

@section('content')
<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari testimoni Kelas">
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
        <h1>Tabel testimoni</h1>
        <a href="" class="tombol-tambah">Tambah Data</a>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto Lulusan</th>
                    <th>Lulusan</th>
                    <th>Rating</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_testimoni as $d)
                <tr data-id="{{ $d->id}}">
                    <td>{{ $loop->iteration }}</td>
                    <td class="gambar-kategori">
                        <img src="{{ asset('assets/img/landingPage/' . $d->image_url) }}" alt="Gambar testimoni">
                    </td>
                    <td>{{ $d->lulusan }}</td>
                    <td>{{ $d->rating }}</td>
                    <td>{{ $d->deskripsi }}</td>
                    <td>
                        <div class="aksi">
                            <div data-id="{{ $d->id}}" class="ubah" data-testimoni="{{ $d }}">
                                <i data-id="{{ $d->id}}" class="ubah fa-solid fa-pen"></i>
                            </div>

                            <div class="hapus">
                                <form action="{{ route('testimoni.hapus',$d->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <i class="hapus fa-solid fa-trash"></i>

                                    <button type="submit" name="hapus" hidden></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
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

<div class="_popup" data-url-ubah="admin/testimoni/ubah" data-url-store="admin/testimoni/store">
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
                    <li>
                        <label for="">Nama Lulusan : </label>
                        <input class="testimoni-namalulusan" name="nama_lulusan" type="text" placeholder="Masukkan nama_lulusan testimoni" autocomplete="off">
                    </li>
                    <li>
                        <label for="">Lulusan : </label>
                        <input class="testimoni-lulusan" name="lulusan" type="text" placeholder="Masukkan lulusan testimoni" autocomplete="off">
                    </li>
                    <li>
                        <label for="">Rating : </label>
                        <input class="testimoni-rating" name="rating" type="number" placeholder="Masukkan rating testimoni" autocomplete="off">
                    </li>
                    <li>
                        <label for="">Deskripsi : </label>
                        <input class="testimoni-deskripsi" name="deskripsi" type="text" placeholder="Masukkan Deskripsi testimoni" autocomplete="off">
                    </li>

                    <li class="upload-gambar">
                        <p>Masukkan Foto Lulusan</p>
                        <input class="" accept=".png,.jpg" type="file" name="gambar_testimoni" hidden>
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
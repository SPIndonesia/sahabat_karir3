@extends('templates.templateadminSK')

@section('content')
@if (session('status'))
<div class="alert alert-success" data-alert="{{ session('status') }}"></div>
@endif

<section class="kategori">
    <div class="sec-one">
        <div class="pencarian">
            <form action="">
                <input type="text" placeholder="Cari Kategori">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>

        <div class="print">
            <i class="fa-solid fa-print"></i>
        </div>
    </div>

    <div class="sec-two kartu">
        <div class="judul">
            <h1>Tabel Kategori</h1>

            <a href="" class="tombol-tambah">Tambah Data</a>
        </div>

        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data_kategori as $d)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>{{ $d->nama }}</td>


                        <td class="aksi">
                            <div class="ubah" data-id="{{ $d->id_kategori}}" data-kategori="{{ $d }}">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="hapus">
                                <form action="{{ route('kategori.hapus',$d->id_kategori) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <i class="hapus fa-solid fa-trash"></i>

                                    <button type="submit" hidden></button>

                                </form>
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

    <div class="popup">
        <div class="kategori-popup">
            <div class="tombol-close">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <div class="konten">
                <div class="judul">
                    <h1>Tambah Data</h1>
                </div>

                <form class="kategori_form" action="" method="POST">
                    @method('PUT')
                    @csrf
                    <ul class="form">
                        <li>
                            <label for="">Nama Kategori : </label>
                            <input class="kategori-nama" type="text" placeholder="Masukkan Nama Kategori" name="nama">
                        </li>

                        <li class="tombol-simpan">
                            <button type="submit">Simpan</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

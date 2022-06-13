@extends('templates.templateadminSK')

@section('content')
<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari visi misi">
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
        <h1>Tabel Tentang Kami</h1>
        <a href="" class="tombol-tambah">Tambah Data</a>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_tentangkami as $d)
                <tr data-id="{{ $d->id}}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->tipe }}</td>
                    <td>{{ $d->deskripsi }}</td>
                    <td>
                        <div class="aksi">
                            <div data-id="{{ $d->id}}" class="ubah" data-tentangkami="{{ $d }}">
                                <i data-id="{{ $d->id}}" class="ubah fa-solid fa-pen"></i>
                            </div>

                            <div class="hapus">
                                <form action="{{ route('tentangkami.hapus',$d->id) }}" method="POST">
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

<div class="_popup" data-url-ubah="admin/tentangkami/ubah" data-url-store="admin/tentangkami/store">
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
                        <label for="">Deskripsi : </label>
                        <input class="tentangkami-deskripsi" name="deskripsi" type="text" placeholder="Masukkan Deskripsi tentangkami" autocomplete="off">
                    </li>
                    <li>
                        <label for="tipe">Tipe</label>
                        <select class="choices form-select" name="tipe">
                            <option class="paket-id_tipe" value="Visi">Visi</option>
                            <option class="paket-id_tipe" value="Misi">Misi</option>
                        </select>
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
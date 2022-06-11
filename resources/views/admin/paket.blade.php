@extends('templates.templateadminSK')

@section('content')
<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Paket Kelas">
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
        <h1>Tabel paket</h1>
        <a href="" class="tombol-tambah">Tambah Data</a>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama paket</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_paket as $d)
                <tr data-id="{{ $d->id_paket}}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>{{ $d->deskripsi }}</td>
                    <td>{{ $d->kategori->nama }}</td>

                    <td class="aksi">
                        <div class="ubah"><i class="ubah fa-solid fa-pen"></i></div>

                        <div class="hapus">
                            <form action="{{ route('paket.hapus',$d->id_paket) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <i class="hapus fa-solid fa-trash"></i>
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
                    <li>
                        <label for="">Nama paket : </label>
                        <input class="paket-nama" type="text" placeholder="Masukkan Nama paket" name="nama"
                            autocomplete="off">
                    </li>

                    <li>
                        <label for="harga">harga : </label>
                        <input class="paket-harga" id="harga" name="harga" type="number"
                            placeholder="Masukkan Harga paket" autocomplete="off">
                    </li>

                    <li>
                        <label for="">Deskripsi : </label>
                        <input class="paket-deskripsi" name="deskripsi" type="text"
                            placeholder="Masukkan Deskripsi paket" autocomplete="off">
                    </li>

                    <li>
                        <label for="id_kategori">Kategori</label>
                        <select class="choices form-select" name="id_kategori">
                            @foreach($data_kategori as $key => $item)
                            <option class="paket-id_kategori" value="{{$item->id_kategori}}">{{$item->nama}}
                            </option>
                            @endforeach
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
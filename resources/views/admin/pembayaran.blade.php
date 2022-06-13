@extends('templates.templateadminSK')

@section('content')
<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Pembayaran">
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
        <h1>Tabel Pembayaran</h1>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    <th>Nama User</th>
                    <th>Paket Dipilih</th>
                    <th>Status Pembayaran</th>
                    <th>Tanggal Bayar</th>
                    <th>Waktu Bayar</th>
                    <th>Total Dibayar</th>
                    <th>Invoice</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_pembayaran as $d)
                <tr data-id="{{ $d->id}}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->kode_pembayaran }}</td>
                    <td>{{ $d->jenis_pembayaran }}</td>
                    <td>{{ $d->user->name }}</td>
                    <td>{{ $d->paket->nama }}</td>
                    <td>{{ $d->status }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->jumlah_dibayar }}</td>
                    <td><a href="{{ $d->invoice }}">Lihat</a></td>
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
@endsection
@extends('templates.templateadminSK')

@section('content')

<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Kategori">
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
                    <th>Nama User</th>
                    <th>Paket Dipilih</th>
                    <th>Tanggal Bayar</th>
                    <th>Waktu Bayar</th>
                    <th>Total Dibayar</th>
                </tr>
            </thead>

            <tbody>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                <tr data-id="">
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        Si Joni dan Totong
                    </td>
                    <td>Lulusan Lomba Mencari Batu</td>
                    <td>
                        17 - Juni - 2022
                    </td>
                    <td>
                        23:59 WIB
                    </td>
                    <td>
                        1000 Doang
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

@endsection
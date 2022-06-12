@extends('templates.templateSK')

@section('content')
<div class="data" data-token="{{ $snap_token }}"></div>

<div class="_detail-paket">
    <div class="judul">
        <h1>Detail Paket <span> | </span></h1>
    </div>

    <div class="detail">
        <div>
            <h1>Nama Kelas : {{ $dataKategori->nama }}</h1>
        </div>

        <div>
            <div class="gambar-paket">
                <img src="{{ asset('assets/img/paket/' . $data_paket->image_url) }}"
                    alt="{{ 'Pelatihan ' . $dataKategori->nama }}">
            </div>

            <div class="detail-paket">
                <div>
                    <h1>PSI</h1>
                    <p>MM: 5X Pertemuan</p>
                    <p>Kepribadian: 5X Pertemuan</p>
                </div>
                <div>
                    <h1>SKD</h1>
                    <p>TIU: 8X Pertemuan</p>
                    <p>TKP: 8X Pertemuan</p>
                    <p>TWK: 5X Pertemuan</p>
                </div>
                <div>
                    <h1>TRYOUT</h1>
                    <p>PSI: 3X TO</p>
                    <p>AKD: 8X TO</p>
                </div>
                <div>
                    <h1>Bonus</h1>
                    <p>Pembahasan TO PSI 3X</p>
                    <p>Pembahasan TO AKD 1x</p>
                    <p>Simulasi Wawancara</p>
                </div>
            </div>
        </div>
    </div>

    <div class="paket">
        <div>
            <h1>Detail Paket</h1>
        </div>

        <div>
            <span>
                <h2>Nama</h2>
                <p>{{ $data_paket->nama }}</p>
            </span>
            <span>
                <h2>Deskripsi</h2>
                <p>{{ $data_paket->deskripsi }}</p>
            </span>
            <span class="harga">
                <h2>Harga</h2>
                <p>{{ $data_paket->harga }}</p>
            </span>
        </div>

        <div>
            <button id="pay-button">Bayar</button>
        </div>

        <form action="{{route('payPost', $data_paket->id_paket)}}" id="submit_form" method="post">
            @csrf
            <input name="json" id="json_callback">
        </form>
    </div>
</div>
@endsection
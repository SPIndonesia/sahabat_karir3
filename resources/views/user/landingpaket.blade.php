@extends('templates.templateSK')

@section('content')

<div class="judul">
    <h1>Ayo bergabung bersama kami!</h1>
    <h3>Pilih Paket Yang Kamu Inginkan</h3>
</div>

@if ($data_paket->isEmpty())
<a href="/" class="paket-kosong">
    <i class="fa-solid fa-triangle-exclamation"></i>
    <h1>Paket Ini Belum Ada, Silahkan Pilih Paket Yang Lain Atau Hubungi Admin</h1>
</a>
@endif

<div class="_card">
    @foreach ($data_paket as $paket)
    <div class="card">
        <img class="konten-logo" src="{{ asset('assets/img/paket/' . $paket->image_url) }}" alt="kelas cpns">

        <div>
            <div class="detail">
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

                <a href="{{route('pay', $paket->id_paket)}}" class="tombol">Beli</a>
            </div>

            <div class="info">
                <h1>{{ $paket->nama }}</h1>

                <span>
                    <p class="harga">{{ $paket->harga }}</p>
                    <a href="{{route('pay', $paket->id_paket)}}" title="Pilih Paket">
                        <i class="fa-solid fa-share"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
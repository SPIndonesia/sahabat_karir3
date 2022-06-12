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
            <div class="deskripsi">
                <p>{{ $paket->deskripsi }}</p>
            </div>

            <div class="info">
                <h1>{{ $paket->nama }}</h1>

                <span>
                    <p>{{ $paket->harga }}</p>
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
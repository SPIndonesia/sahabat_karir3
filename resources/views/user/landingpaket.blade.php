@extends('templates.templateSK')

@section('content')

<!-- --------------- Gabung Bersama Kami --------------- -->
<div class="konten gabung-bersama-kami" id="kelas">
    <div class="pembungkus-judul">
        <h1 class="judul">Ayo bergabung bersama kami!</h1>
        <h3 class="sub-judul">Pilih kelas sesuai cita-cita mu</h3>
    </div>

    <div class="pembungkus-konten__gabung-bersama-kami">
        @foreach ($data_paket as $paket)
        <div class="konten__gabung-bersama-kami">
            <img class="konten-logo" src="{{ asset('assets/img/paket/' . $paket->gambar_paket) }}" alt="kelas cpns">
            <h1>{{ $paket->nama }}</h1>
            <div class="lihat-kelas">
                <p>{{ $paket->deskripsi }}</p>
                <p>{{ $paket->harga }}</p>
                <a href="{{route('pay', $paket->id_paket)}}" title="Kunjungi">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- --------------- Gabung Bersama Kami --------------- -->
{{-- <div class="konten gabung-bersama-kami" id="kelas">
    <div class="pembungkus-judul">
        <h1 class="judul">Ayo bergabung bersama kami!</h1>
        <h3 class="sub-judul">Pilih kelas sesuai cita-cita mu</h3>
    </div>

    <div class="pembungkus-konten__gabung-bersama-kami">
        @foreach ($data_paket as $key => $item)
        <div class="konten__gabung-bersama-kami">
            <img class="konten-logo" src="{{asset('assets/img/landingPage/cpns.png')}}" alt="kelas cpns">
            <h1>{{$item->nama}}</h1>
            <div class="lihat-kelas">
                <p>Rp {{$item->harga}}</p>
                <a href="{{route('pay', $item->id_paket)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}
@endsection
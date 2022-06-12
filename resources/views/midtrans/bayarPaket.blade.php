@extends('templates.templateSK')


@section('content')

<div class="data" data-token="{{ $snap_token }}"></div>

<div class="konten gabung-bersama-kami" id="kelas">
    <div class="pembungkus-judul">
        <h1 class="judul">{{$data_paket->nama}}</h1>
        <h3 class="sub-judul">Rp {{$data_paket->harga}}</h3>
        <button class="btn btn-primary" id="pay-button">
            pay
        </button>
        <form action="{{route('payPost',$data_paket->id_paket)}}" id="submit_form" method="post">
            @csrf
            <input type="hidden" name="json" id="json_callback">
        </form>
    </div>
</div>
@endsection
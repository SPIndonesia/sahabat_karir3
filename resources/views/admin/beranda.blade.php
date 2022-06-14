@extends('templates.templateadminSK')

@section('content')

<section class="_kartu">
    <div>
        <div>
            <div class="icon">
                <img src="{{ asset ('assets/img/icon/income.png') }}" alt="income">
            </div>

            <div class="text">
                <a href="">Income</a>
                <p>{{ $income->sum('jumlah_dibayar') }}</p>
            </div>
        </div>

        <div class="persentase">
            <span>20%</span>
            <i class="fa-solid fa-arrow-up-long"></i>
        </div>
    </div>

    <div>
        <div class="info">
            <div class="icon">
                <img src="{{ asset('assets/img/icon/jumlah-peserta.png') }}" alt="jumlah peserta">
            </div>

            <div class="text">
                <a href="/admin/user">Jumlah Peserta</a>
                <p>{{ $semua_user->count() }}</p>
            </div>
        </div>

        <div class="persentase">
            <span>15%</span>
            <i class="fa-solid fa-arrow-up-long"></i>
        </div>
    </div>

    <div>
        <div>
            <div class="icon">
                <img src="{{ asset ('assets/img/icon/kategori.png') }}" alt="kategori">
            </div>

            <div class="text">
                <a href="/admin/kategori">Kategori</a>
                <p>{{ $kategori->count()}}</p>
            </div>
        </div>
    </div>
</section>

<section class="bagan">
    <div class="bagan"></div>
</section>

@endsection

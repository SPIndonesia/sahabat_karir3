@extends('templates.loginRegister')

@section('content')

<div class="form">
    <div class="welcome">
        <span>Hello, </span>
        <span>Welcome back!</span>

        <p>Selamat Datang di Sahabat Karir</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <ul>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email" autocomplete="off">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </li>

            <li>
                <label for="password">Password</label>

                <div class="__mata">
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" autocomplete="off">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mata">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
            </li>

            <li class="remember-password">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="checkbox">Remember Password</label>
                </div>

                <div>
                    <a href="">Forgot Password</a>
                </div>
            </li>

            <li class="tombol">
                <button type="submit">Sign In</button>
            </li>

            <li class="daftar-sekarang">
                <span>Belum punya akun?</span>
                <a href="{{ route('register') }}">Daftar Sekarang</a>
            </li>

        </ul>
    </form>
</div>

<div class="gambar-vektor">
    <img src="assets/img/login-register/login.png" alt="sahabat karir">
</div>

@endsection
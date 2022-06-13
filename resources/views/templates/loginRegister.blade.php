<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/img/icon/logo-sk.png')}}">
    <title>Sahabat Karir</title>

    {{-------------- css --------------}}
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home/loginRegister.css') }}">
</head>

<body>
    <section class="form-login-register">

        @yield('content')

    </section>
</body>

{{-------------- font awesome --------------}}
<script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>

{{-------------- js --------------}}
<script src="assets/js/home/loginRegister.js"></script>

</html>
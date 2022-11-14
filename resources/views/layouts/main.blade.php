<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Monitoring Kinerja Tim Unit Bisnis">
    <meta name="keywords" content="">
    <meta name="author" content="MKTUnitBisnis">

    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/main.css">
    {{-- <link rel="stylesheet" href="{{ asset('/') }}css/style.css"> --}}
    {{-- <link rel="stylesheet" href="css/stylepomodoro.css"> --}}
    <link rel="stylesheet" href="{{ asset('/') }}app.css">

    <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/6f3103b13c.js" crossorigin="anonymous"></script>

    <title>{{ $title }}</title>
    <style type="text/css">
    </style>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>

    <header class="header" id="header">
        <div class="bg">
            @include('partials.navbar')
        </div>
    </header>
    @include('partials.sidebar')

    <main>
        @yield('container')
    </main>
    {{-- <footer class="mt-auto">
        <div class="container-xxl">
            <p>© 2022 <b>SVNTH</b> Muhammad Trio Satria Kurniawan <b>POLITALA</b></p>
        </div>
    </footer> --}}

    <script src="{{ asset('/') }}js/script.js"></script>
</body>

</html>

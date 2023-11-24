<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GOReserve</title>
    <link rel="icon" href="{{ asset('assets/images/logo2.png') }}" type="image/x-icon" />

    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/plugins/fontawesome/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body class="font-poppins antialiased">
    @include('layouts.navigation')

    @yield('content')
    
    @include('layouts.footer')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     


    <title>Login</title>
    <link rel="icon" href="{{ asset('assets/img/logo-ptpn.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("assets/img/bg.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            z-index: -2;
        }

        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(6px);
            z-index: -1;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">

    <!-- Background -->
    <div class="background-image"></div>
    <div class="background-overlay"></div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
        <div>
            <img style="width: 300px;" src="{{ asset('assets/img/logo-ptpn.png') }}" alt="Logo PTPN">
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/10 backdrop-blur-md border border-white/20 shadow-lg rounded-xl">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
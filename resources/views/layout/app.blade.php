<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="{{ asset('assets/img/logo-ptpn.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Surat'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

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

        .content-wrapper {
            min-height: 100vh;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 10px;
        }

        .header-info h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .header-info p {
            margin: 0;
            font-size: 0.9rem;
        }

        .header-logo {
            max-height: 70px;
        }

        .nav-link {
            font-size: 0.9rem;
            color: #ffffffff !important;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        hr {
            border: 1px solid #ffffff80;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Background -->
    <div class="background-image"></div>
    <div class="background-overlay"></div>

    <!-- Konten -->
    <div class="container content-wrapper position-relative z-1 text-white">
        <!-- Header -->
        <div class="header-section">
            <div class="header-info">
                <h1>PTPN I REGIONAL VII</h1>
                <p>Alamat: Jl. Teuku Umar No.300, Bandar Lampung</p>
                <p>Telp: 0721-702233 | Email: skrh_reg7@ptpn1.co.id</p>
            </div>
            <div class="ptpn-logo">
                <img src="{{ asset('assets/img/logo-ptpn.png') }}" alt="Logo PTPN1" class="header-logo">
            </div>
        </div>

        <hr>

        <!-- Navbar -->
        <nav class="mb-4">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('/') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('surat.create') ? 'active fw-bold' : '' }}" href="{{ route('surat.create') }}">Isi Surat Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active fw-bold' : '' }}" href="{{ route('login') }}">Login admin</a>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

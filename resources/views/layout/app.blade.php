<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Perintah Perjalanan Dinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Light background for the page */
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .navbar-brand {
            color: #212529 !important; /* Warna hitam gelap Bootstrap (atau #000) */
            /* Anda mungkin juga ingin mengatur ukuran font agar tidak terlalu kecil */
            /* font-size: 1.25rem; */ /* Ukuran default h5 Bootstrap */
        }
               /* Jika baris alamat dan telepon/email ingin tetap putih, Anda bisa tambahkan span atau div di dalamnya */
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container">
            <a class="navbar-brand"href="#">
            REGIONAL 7<br>
            Alamat : Jl.Teuku Umar No.300, Bandar Lampung<br>
            Telp : 0721-702233 Email : skrh_reg7@ptpn1.co.id
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('surat.create') }}">
                            {{-- Menggunakan helper asset() untuk link gambar --}}
                            <img src="{{ asset('assets/img/logo-ptpn.png') }}" alt="logo" class="nav-icon">
                            {{-- Jika Anda masih ingin teks disamping ikon, aktifkan baris ini --}}
                            {{-- Input Surat --}}
                        </a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
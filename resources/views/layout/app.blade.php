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
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 2px solid #1f1d1dff;
            margin-bottom: 30px;
        }
        .header-logo {
            max-width: 150px; /* Sesuaikan ukuran logo */
        }
        .header-info h1 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #312b2bff;
        }
        .header-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    
    <div class="container">
        {{-- Header Section --}}
        <div class="header-section">
            <div class="header-info">
                <h1>REGIONAL 7</h1>
                <p>Alamat : Jl.Teuku Umar No.300, Bandar Lampung</p>
                <p>Telp : 0721-702233 Email : skrh_reg7@ptpn1.co.id</p>
            </div>
            <div>
                {{-- Make sure the path to your logo is correct --}}
                <img src="{{ asset('assets/img/logo-ptpn.png') }}" alt="logo PTPN1" class="header-logo">
            </div>
        </div>
        
        {{-- Content section yielded from other views --}}
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
@extends('layout.app')

@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        background: url('{{ asset("assets/img/bg.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Segoe UI', sans-serif;
    }

    .dashboard-wrapper {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border-radius: 16px;
        padding: 40px 30px;
        width: 100%;
        max-width: 600px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        color: #000;
        text-align: center;
    }

    .glass-card h2 {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .glass-card p {
        font-size: 16px;
        margin-bottom: 30px;
    }

    .btn-custom {
        padding: 12px 24px;
        border-radius: 12px;
        font-size: 16px;
        margin: 10px 0;
    }

    .address-box {
        margin-top: 30px;
        font-size: 14px;
        color: #333;
        background: rgba(255, 255, 255, 0.4);
        padding: 15px;
        border-radius: 12px;
    }

    .nav-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .nav-links a {
        text-decoration: none;
        color: #000;
        font-weight: 500;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }
</style>

<div class="dashboard-wrapper">
    <div class="glass-card text-white">
        <h2>Selamat Datang</h2>
        <p>Sistem Surat Perintah Perjalanan Dinas - Regional 7</p>

        <a href="{{ route('login') }}" class="btn btn-outline-light btn-custom w-100 border border-white text-white">
            <i class="bi bi-person-lock"></i> Login Admin
        </a>
        <a href="{{ route('surat.create') }}" class="btn btn-outline-light btn-custom w-100 border border-white text-white">
            <i class="bi bi-pencil-square"></i> Isi Surat Perjalanan
        </a>

        <div class="address-box mt-4">
            <strong>REGIONAL 7</strong><br>
            Alamat: Jl. Teuku Umar No.300, Bandar Lampung<br>
            Telp: 0721-702233 | Email: skrh_reg7@ptpn1.co.id
        </div>
    </div>
</div>
@endsection

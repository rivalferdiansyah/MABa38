<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mie Ayam Bakso 38</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .app-header {
            padding: 10px 20px;
            background-color: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .app-header img {
            width: 66px;
            height: 66px;

        }
    </style>
</head>
<body>

    {{-- Logo Header --}}
    <div class="app-header">
        <img src="{{ asset('images/logo mie ayam bakso 38.jpeg') }}" alt="Logo Mie Ayam Bakso 38">
    </div>

    {{-- Konten Utama --}}
    <div class="container py-4">
        @yield('content')
    </div>

    {{-- Navigasi bawah hanya saat login --}}
    @auth
    <nav class="fixed-bottom bg-white border-top py-2 text-center d-flex justify-content-around">
        <a href="/" class="text-decoration-none">🏠 Beranda</a>
        <a href="/menu" class="text-decoration-none">📋 Menu Digital</a>
        <a href="/riwayat" class="text-decoration-none">🕓 Riwayat</a>
        <a href="/profil" class="text-decoration-none">👤 Profil Saya</a>
    </nav>
    @endauth

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

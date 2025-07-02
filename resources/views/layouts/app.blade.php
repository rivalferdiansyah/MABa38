<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mie Ayam Bakso 38</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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

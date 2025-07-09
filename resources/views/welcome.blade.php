@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h2>Selamat datang di Mie Ayam Bakso 38</h2>
    <p class="mt-3">Silakan login atau daftar untuk mulai memesan makanan favoritmu!</p>
    @guest
    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-4">Daftar atau Masuk</a>
    @endguest
</div>
{{-- Navigasi bawah seperti di home.blade.php --}}
<footer class="fixed-bottom bg-white border-top text-center py-2 d-flex justify-content-around">
    {{-- Beranda --}}
    <a href="{{ url('/') }}" class="text-decoration-none text-dark">
        <i class="bi bi-house-door"></i> <br>🏠 Beranda
    </a>

    {{-- Menu Digital --}}
    <a href="{{ Auth::check() ? route('menu.index') : route('login') }}" class="text-decoration-none text-dark">
        <i class="bi bi-file-earmark-text"></i> <br>📋 Menu Digital
    </a>

    {{-- Riwayat --}}
    <a href="{{ Auth::check() ? route('riwayat.index') : route('login') }}" class="text-decoration-none text-dark">
        <i class="bi bi-clock-history"></i> <br>🕓 Riwayat
    </a>

    {{-- Profil Saya --}}
    <a href="{{ Auth::check() ? route('profil') : route('login') }}" class="text-decoration-none text-dark">
        <i class="bi bi-person"></i> <br>👤 Profil Saya
    </a>
</footer>

@endsection

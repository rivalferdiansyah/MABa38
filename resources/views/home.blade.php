@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    @guest
        <h4>Selamat datang di Mie Ayam Bakso 38</h4>
        <p>Silakan daftar atau masuk untuk mulai memesan makanan.</p>

        <a href="{{ route('login') }}" class="btn btn-danger btn-lg mt-4 px-5 py-2">Daftar atau Masuk</a>
    @endguest

    @auth
        <h4>Halo, {{ Auth::user()->name }} 👋</h4>
        <p>Selamat berbelanja:)</p>
        {{-- Tombol-tombol menu digital, riwayat, dan profil saya sudah dihapus --}}
    @endauth
</div>
@endsection

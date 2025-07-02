@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h2>Selamat datang di Mie Ayam Bakso 38</h2>
    <p class="mt-3">Silakan login atau daftar untuk mulai memesan makanan favoritmu!</p>
    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-4">Daftar atau Masuk</a>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4 class="text-center mb-4">Menu Kami</h4>

    <div class="row">
        @foreach($menus as $menu)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img
                    src="{{ asset('images/' . $menu['gambar']) }}"
                    class="card-img-top mx-auto d-block"
                    alt="{{ $menu['nama'] }}"
                    style="max-width: 100%; height: auto;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $menu['nama'] }}</h5>
                    <p class="card-text">Rp {{ number_format($menu['harga'], 0, ',', '.') }}</p>
                    <a href="{{ url('/pesan/' . $menu['id']) }}" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <h4>Profil Saya</h4>
    <ul class="list-group mt-3">
        <li class="list-group-item"><strong>Nama:</strong> {{ Auth::user()->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
    </ul>

    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger w-100">Keluar</button>
    </form>
@endsection

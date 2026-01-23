@extends('layouts.main')

@section('container')
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-danger">Selamat Datang Di Web, {{ $name }}</h1>
            <p class="col-md-8 fs-4 text-secondary">
                Ini adalah blog pribadi tempat saya berbagi seputar dunia Informatika, koding, dan perjalanan belajar
                Laravel saya.
            </p>
            <hr class="my-4">
            <div class="d-flex gap-2">
                <a href="/posts" class="btn btn-danger btn-lg px-4 shadow">Lihat Blog</a>
                <a href="/about" class="btn btn-outline-secondary btn-lg px-4">Tentang LaraveL 404</a>
            </div>
        </div>
    </div>

    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3">
                <h3 class="fw-bold text-danger">{{ $totalArtikel }}</h3>
                <p class="text-muted mb-0">Total Artikel</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3">
                <h3 class="fw-bold text-danger">{{ $totalCategory }}</h3>
                <p class="text-muted mb-0">Kategori</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3">
                <h3 class="fw-bold text-danger">7.42 KM</h3>
                <p class="text-muted mb-0">Lari Terakhir</p>
            </div>
        </div>
    </div>
@endsection
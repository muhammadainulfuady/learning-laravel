@extends("layouts.main")

@section("container")
    <div class="container mt-4">
        {{-- Judul dengan badge --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5">Post Category: <span class="text-danger">{{ $category }}</span></h1>
            <p class="text-muted">Menampilkan semua artikel dalam topik {{ $category }}</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Kondisi jika artikel kosong (sesuai logika kamu) --}}
                @forelse ($posts as $post)
                    <article class="mb-5 pb-4 border-bottom shadow-sm p-4 rounded-3 bg-white transition-hover">
                        <h2 class="fw-bold">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark hover-danger">
                                {{ $post->title }}
                            </a>
                        </h2>

                        {{-- Meta Data --}}
                        <div class="text-muted small mb-3">
                            <i class="bi bi-calendar3 me-1"></i> {{ $post->created_at->diffForHumans() }}
                            <span class="mx-2">|</span>
                            <i class="bi bi-clock me-1"></i> 5 min read
                        </div>

                        <p class="text-secondary lead fs-6">{{ $post->excerpt }}</p>

                        <a href="/posts/{{ $post->slug }}" class="btn btn-danger btn-sm rounded-pill px-3">
                            Read Full Article <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </article>
                @empty
                    {{-- Tampilan Alert yang lebih estetik --}}
                    <div class="alert alert-warning border-0 shadow-sm p-5 text-center" role="alert">
                        <i class="bi bi-exclamation-triangle display-1 d-block mb-3"></i>
                        <h4 class="fw-bold">Ups! Belum ada artikel.</h4>
                        <p class="mb-0 text-secondary">Maaf, kategori <strong>{{ $category }}</strong> saat ini belum memiliki
                            konten tersedia.</p>
                        <a href="/posts" class="btn btn-outline-dark mt-4 rounded-pill">Kembali ke Semua Blog</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <style>
        .transition-hover {
            transition: all 0.3s ease;
        }

        .transition-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .1) !important;
        }

        .hover-danger:hover {
            color: #f00d2f !important;
        }
    </style>
@endsection

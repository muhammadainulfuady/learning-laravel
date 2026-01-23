@extends("layouts.main")

@section("container")
    <div class="container mt-4">
        <h1 class="text-center mb-5 fw-bold display-4">Blog <span class="text-danger">LaraveL 404</span></h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse ($posts as $post)
                    <article class="mb-5 pb-4 border-bottom shadow-sm p-4 rounded-3 bg-white transition-hover">
                        {{-- Badge Kategori --}}
                        <div class="mb-2">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none badge bg-danger text-white">
                                <i class="bi bi-tag-fill me-1"></i> {{ $post->category->name }}
                            </a>
                        </div>

                        <h2 class="fw-bold">
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark hover-danger">
                                {{ $post->title }}
                            </a>
                        </h2>

                        {{-- Meta Data: Penulis & Waktu --}}
                        <div class="text-muted small mb-3">
                            <i class="bi bi-person-circle me-1"></i> LaraveL 404
                            <span class="mx-2">|</span>
                            <i class="bi bi-calendar3 me-1"></i> {{ $post->created_at->diffForHumans() }}
                        </div>

                        <p class="text-secondary lead fs-6">{{ $post->excerpt }}</p>

                        <a href="/posts/{{ $post->slug }}" class="btn btn-outline-danger rounded-pill px-2">
                            <i class="bi bi-arrow-left me-1"></i> Read More
                        </a>
                    </article>
                @empty
                    <div class="text-center py-5">
                        <i class="bi bi-journal-x display-1 text-muted"></i>
                        <p class="mt-3 fs-4 text-secondary">Belum ada artikel yang diterbitkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- CSS Tambahan untuk efek --}}
    <style>
        .transition-hover {
            transition: all 0.3s ease;
        }

        .transition-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
        }

        .hover-danger:hover {
            color: #f00d2f !important;
        }
    </style>
@endsection
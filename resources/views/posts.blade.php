@extends("layouts.main")
@section("container")
    <div class="container mt-4">
        {{-- Logic to cheking posts is true or false --}}
        @if ($posts->count() > 0)
            <h1 class="text-center mb-5 fw-bold display-4 text-danger">{{ $title }}</h1>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @foreach ($posts as $post)
                        {{-- Card in posts --}}
                        <div class="card mb-4 shadow-sm border-danger border-opacity-25 overflow-hidden">
                            <div class="row g-0">
                                <div
                                    class="col-md-4 bg-dark d-flex align-items-center justify-content-center border-end overflow-hidden">
                                    <img src="https://placeimg.dev/600x500?gradient=FF5733,4F46E5&text={{ $post->category->name }}&fontSize=15"
                                        class="img-fluid w-100 h-100 rounded-start" alt="{{ $post->category->name }}"
                                        style="object-fit: cover; min-height: 200px;">
                                </div>
                                {{-- Conten section --}}
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <div class="mb-2">
                                            <a href="/categories/{{ $post->category->slug }}"
                                                class="badge bg-danger text-white text-decoration-none shadow-sm">
                                                {{ $post->category->name }}
                                            </a>
                                        </div>

                                        <h2 class="card-title h3 fw-bold">
                                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                                {{ $post->title }}
                                            </a>
                                        </h2>

                                        <p class="card-text mb-2">
                                            <small class="text-muted">
                                                By. <a href="/authors/{{ $post->author->username }}"
                                                    class="text-decoration-none fw-bold text-danger">{{ $post->author->name }}</a>
                                                • {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>

                                        <p class="card-text text-secondary">{{ $post->excerpt }}</p>

                                        <div class="mt-3">
                                            <a href="/posts/{{ $post->slug }}"
                                                class="btn btn-danger btn-sm rounded-pill px-4 shadow-sm">
                                                Read More <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            {{-- Tampilan Jika Data Kosong --}}
            <div class="row justify-content-center py-5">
                <div class="col-md-6">
                    <div class="text-center p-5 bg-light rounded-3 border border-danger border-2 border-opacity-25 shadow-sm">
                        <i class="bi bi-journal-x display-1 text-danger"></i>
                        <h3 class="mt-3 fw-bold">Belum ada artikel.</h3>
                        <a href="/" class="btn btn-outline-danger mt-3">Kembali ke Home</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
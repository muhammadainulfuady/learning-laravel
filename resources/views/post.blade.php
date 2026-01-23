@extends("layouts.main")

@section("container")
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5 bg-white p-4 p-md-5 shadow-sm rounded-3">
                    {{-- Judul Artikel --}}
                    <h1 class="display-5 fw-bold text-dark mb-3">{{ $post->title }}</h1>

                    {{-- Meta Info --}}
                    <div class="d-flex align-items-center text-muted mb-4 pb-3 border-bottom">
                        <div class="small">
                            By. <a href="/about" class="text-decoration-none fw-bold text-dark">Muhammad Ainul Fuady</a>
                            in <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none badge bg-danger text-white ms-1">{{ $post->category->name }}</a>
                            <span class="ms-2">• {{ $post->created_at->format('d M Y') }}</span>
                        </div>
                    </div>

                    {{-- Isi Artikel --}}
                    <div class="article-body fs-5 lh-base text-secondary mb-5">
                        {!! $post->body !!}
                    </div>

                    {{-- Navigasi Bawah --}}
                    <div class="border-top pt-4">
                        <a href="/posts" class="btn btn-outline-danger rounded-pill px-4">
                            <i class="bi bi-arrow-left me-1"></i> Back to Blog
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <style>
        /* Styling agar tag HTML dari body (seperti <p>, <b>) terlihat rapi */
        .article-body p {
            margin-bottom: 1.5rem;
        }

        .article-body h2,
        .article-body h3 {
            color: #212529;
            margin-top: 2rem;
            font-weight: 700;
        }
    </style>
@endsection

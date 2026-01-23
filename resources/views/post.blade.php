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
                            By. <a href="/authors/{{ $post->author->username }}"
                                class="text-decoration-none fw-bold text-dark">{{ $post->author->name }}</a>
                            in <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none badge bg-danger text-white ms-1">{{ $post->category->name }}</a>
                            <span class="ms-2">• {{ $post->created_at->format('d M Y') }}</span>
                        </div>
                    </div>

                    <div class="img-thumbnail rounded-start text-center my-3 p-0 overflow-hidden">
                        <img src="https://placeimg.dev/400x200?gradient=FF5733,4F46E5&text={{ $post->category->name }}&fontSize=13"
                            class="img-fluid w-100" alt="{{ $post->category->name }}"
                            style="object-fit: cover; aspect-ratio: 2 / 1;">
                    </div>

                    {{-- Isi Artikel --}}
                    <article class="article-body fs-5 lh-base text-secondary mb-5 text-start">
                        {!! $post->body !!}
                    </article>

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
@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        {{-- Logic to cheking posts is true or false --}}
        @if ($posts->count() > 0)
            <h4 class="text-center mb-3 fw-bold fs-2 display-4 text-danger">{{ $title }}</h4>
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/posts" method="GET">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $posts->links() }}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                                    {{-- Image in top --}}
                                    <div class="position-relative">
                                        <div class="position-absolute px-2 py-1 text-white small"
                                            style="background-color: rgba(220, 53, 69, 0.8); border-bottom-right-radius: 8px;">
                                            <a href="/posts?category={{ $post->category->slug }}"
                                                class="text-white text-decoration-none">{{ $post->category->name }}</a>
                                        </div>
                                        <img src="https://placeimg.dev/500x350?gradient=FF5733,4F46E5&text={{ $post->category->name }}&fontSize=15"
                                            class="card-img-top w-100" alt="{{ $post->category->name }}"
                                            style="height: 200px; object-fit: cover;">
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fw-bold">
                                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                                {{ $post->title }}
                                            </a>
                                        </h5>

                                        <p class="card-text mb-2">
                                            <small class="text-muted">
                                                By. <a href="/posts?author={{ $post->author->username }}"
                                                    class="text-decoration-none fw-bold text-danger">{{ $post->author->name }}</a>
                                                in<a href="/posts?category={{ $post->category->slug }}"
                                                    class="text-decoration-none badge bg-danger text-white ms-1">{{ $post->category->name }}</a>
                                            </small>
                                        </p>

                                        <p class="card-text text-secondary small">{{ $post->excerpt }}</p>

                                        <div class="mt-auto pt-3">
                                            <a href="/posts/{{ $post->slug }}" class="btn btn-danger btn-sm w-100 rounded-pill">
                                                Read More
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-footer bg-white border-0 py-3">
                                        <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
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
                        <div
                            class="text-center p-5 bg-light rounded-3 border border-danger border-2 border-opacity-25 shadow-sm">
                            <i class="bi bi-journal-x display-1 text-danger"></i>
                            <h3 class="mt-3 fw-bold">Belum ada artikel {{ request('search') ?? '404' }}</h3>
                        </div>
                    </div>
                </div>
            @endif
        </div>

@endsection

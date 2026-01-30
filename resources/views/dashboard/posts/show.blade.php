@extends('dashboard.layouts.main')
@section('container')
    <div class="container mt-4">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <article class="mb-5 bg-white p-4 p-md-5 shadow-sm rounded-3">
                    {{-- Judul Artikel --}}
                    <h1 class="display-5 fw-bold text-dark mb-3">{{ $post->title }}</h1>

                    {{-- Meta Info --}}
                    <div class="border-top pt-4">
                        <a href="/dashboard/posts" class="btn btn-success">
                            <span data-feather="arrow-left"></span>Back to all my posts
                        </a>
                        <a href="/posts?category={{ $post->category->slug }}" class="btn btn-warning">
                            <span data-feather="edit"></span>Edit Post
                        </a>
                        <a href="/posts?category={{ $post->category->slug }}" class="btn btn-danger">
                            <span data-feather="x-circle"></span>Delete Post
                        </a>
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
                </article>
            </div>
        </div>
    </div>
@endsection
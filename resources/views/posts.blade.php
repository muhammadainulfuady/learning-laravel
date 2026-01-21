@extends("layouts.main")
@section("container")
    <div class="container mt-4">
        <h1 class="text-center mb-5 fw-bold">Hello Welcome To My Blog</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <article class="mb-5 pb-4 border-bottom">
                        <h2 class="article-unik">
                            <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-primary hover-opacity">
                                {{ $post['title'] }}
                            </a>
                        </h2>
                        <h6 class="text-muted">By: <span class="text-dark fw-semibold">{{ $post['author'] }}</span></h6>
                        <p class="mt-3 text-secondary">{{ Str::limit($post['body'], 130) }}</p>
                        <a href="/posts/{{ $post['slug'] }}" class="btn btn-sm btn-outline-primary">Read More..</a>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection()
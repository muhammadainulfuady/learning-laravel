@extends("layouts.main")
@section("container")
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="link-primary fs-3 text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>By. Muhammad Ainul Fuady in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/posts">Back to Blog</a>
    </article>
@endsection

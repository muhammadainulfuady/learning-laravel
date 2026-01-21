@extends("layouts.main")
@section("container")
    <article class="mb-5">
        <h2>
            <a href="/post/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        <a href="/blog">Back to Blog</a>
    </article>
@endsection
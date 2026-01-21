@extends("layouts.main")
@section("container")
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post["slug"] }}" class="link-primary fs-3 text-decoration-none">{{ $post["title"] }}</a>
        </h2>
        <img src="{{ asset("img/" . $post['img']) }}" alt="" class="img-fluid my-2" width="500px">
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        <a href="/posts">Back to Blog</a>
    </article>
@endsection
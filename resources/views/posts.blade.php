@extends("layouts.main")
@section("container")
    <h1 class="text-center mb-4">Hello Welcome To My Bloggss</h1>
    <article class="mb-5">
        @foreach ($posts as $post)
            <h2>
                <a href="/post/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        @endforeach
    </article>
@endsection()
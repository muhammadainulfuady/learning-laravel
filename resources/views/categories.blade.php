@extends("layouts.main")

@section("container")
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-5 fw-bold text-danger">Post Categories</h1>

                <div class="list-group shadow-sm">
                    @foreach ($categories as $category)
                        <a href="/categories/{{ $category->slug }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3 border-danger-subtle">
                            <div class="fw-bold">
                                <i class="bi bi-folder2-open text-danger me-2"></i>
                                {{ $category->name }}
                            </div>
                            {{-- Menampilkan jumlah artikel di kategori tersebut --}}
                            <span class="badge bg-danger rounded-pill">
                                {{ $category->posts->count() }} Posts
                            </span>
                        </a>
                    @endforeach
                </div>

                <div class="mt-4 text-center">
                    <a href="/posts" class="btn btn-outline-danger rounded-pill">
                        <i class="bi bi-arrow-left"></i> Back to All Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
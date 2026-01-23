@extends("layouts.main")

@section("container")
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-5 fw-bold text-danger">Contact Me</h1>

                @foreach ($contacts as $contact)
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden" style="border-radius: 15px;">
                        {{-- Header Card dengan aksen Danger --}}
                        <div class="card-header bg-danger text-white py-3 text-center">
                            <h5 class="mb-0 fw-bold">Hubungi LaraveL 404</h5>
                        </div>

                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                {{-- Email --}}
                                <li class="list-group-item d-flex align-items-center py-3">
                                    <i class="bi bi-envelope-at-fill text-danger fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block text-uppercase fw-bold"
                                            style="font-size: 0.7rem;">Email</small>
                                        <a href="mailto:{{ $contact->email }}"
                                            class="text-decoration-none text-dark fw-semibold">{{ $contact->email }}</a>
                                    </div>
                                </li>

                                {{-- No hp --}}
                                <li class="list-group-item d-flex align-items-center py-3">
                                    <i class="bi bi-envelope-at-fill text-danger fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.7rem;">No
                                            Handphone</small>
                                        <a href="/contact"
                                            class="text-decoration-none text-dark fw-semibold">{{ $contact->no_hp }}</a>
                                    </div>
                                </li>

                                {{-- GitHub --}}
                                <li class="list-group-item d-flex align-items-center py-3">
                                    <i class="bi bi-github text-danger fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block text-uppercase fw-bold"
                                            style="font-size: 0.7rem;">GitHub Profile</small>
                                        <a href="{{ $contact->github }}" target="_blank"
                                            class="text-decoration-none text-dark fw-semibold">github.com/muhammadainulfuady</a>
                                    </div>
                                </li>

                                {{-- Instagram --}}
                                <li class="list-group-item d-flex align-items-center py-3 border-0">
                                    <i class="bi bi-instagram text-danger fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block text-uppercase fw-bold"
                                            style="font-size: 0.7rem;">Instagram</small>
                                        <a href="{{ $contact->instagram }}" target="_blank"
                                            class="text-decoration-none text-dark fw-semibold">@mhmmdanlfuady</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-4">
                    <p class="text-muted">Senang bisa berdiskusi seputar Web Development atau Informatika Engineering!</p>
                    <a href="/" class="btn btn-outline-danger rounded-pill px-4">Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
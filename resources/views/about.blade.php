@extends("layouts.main")
@section("container")
    <div class="container d-flex justify-content-center">
        <div class="card shadow border-0 overflow-hidden" style="width: 800px; border-radius: 15px;">
            <div class="card-header bg-gradient bg-danger py-3 text-center">
                <h5 class="mb-0 text-white fw-bold" style="letter-spacing: 1px;">PROFIL MAHASISWA</h5>
            </div>

            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block">
                        <img src="img/{{ $image }}" alt="{{ $name }}" class="rounded-circle img-thumbnail shadow-sm"
                            width="140" height="140" style="object-fit: cover; border: 4px solid #f8f9fa;">
                    </div>
                    <h4 class="mt-3 fw-bold text-dark">{{ $name }}</h4>
                    <span class="badge bg-danger px-3 rounded-pill">Teknik Informatika</span>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-badge text-secondary me-3"></i>
                            <span class="text-muted small fw-bold text-uppercase">NIM</span>
                        </div>
                        <span class="fw-semibold">{{ $nim }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope text-secondary me-3"></i>
                            <span class="text-muted small fw-bold text-uppercase">Email</span>
                        </div>
                        <span class="text-primary">{{ $email }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-mortarboard text-secondary me-3"></i>
                            <span class="text-muted small fw-bold text-uppercase">Program Studi</span>
                        </div>
                        <span class="text-end">{{ $prodi }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-building text-secondary me-3"></i>
                            <span class="text-muted small fw-bold text-uppercase">Kampus</span>
                        </div>
                        <span class="text-end">Univ. Trunojoyo Madura</span>
                    </li>
                </ul>
            </div>

            <div class="card-footer bg-white border-0 text-center pb-4">
                <a href="/contact" class="btn btn-dark btn-sm rounded-pill px-4 shadow-sm">Hubungi Saya</a>
            </div>
        </div>
    </div>

@endsection

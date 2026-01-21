@extends("layouts.main")
@section("container")
    <div class="container">
        <div class="card shadow-sm" style="max-width: 600px;">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Biodata Mahasiswa</h5>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="img/{{ $image }}" alt="{{ $name }}" class="rounded" width="150">
                </div>
                <table class="table table-borderless">
                    <tr>
                        <th width="150">Nama</th>
                        <td>: {{ $name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: {{ $email }}</td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td>: {{ $nim }}</td>
                    </tr>
                    <tr>
                        <th>Prodi</th>
                        <td>: {{ $prodi }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends("layouts.main")
@section("container")
    <h1>Biodata <?= $name ?> </h1>
    <img src="img/<?= $image ?>" alt="" class="rounded img-fluid" width="500px">
    <ul>
        <li>{{ $name }}</li>
        <li>{{ $email }}</li>
        <li>{{ $nim }}</li>
        <li>{{ $prodi }}</li>
    </ul>
@endsection
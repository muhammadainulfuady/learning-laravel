@extends("layouts.main")
@section("container")
    <ol class="list-group list-group-numbered">
        <li class="list-group-item">{{ $contact['email'] }}</li>
        <li class="list-group-item">{{ $contact['no_hp'] }}</li>
        <li class="list-group-item">{{ $contact['github'] }}</li>
        <li class="list-group-item">{{ $contact['instagram'] }}</li>
    </ol>
@endsection
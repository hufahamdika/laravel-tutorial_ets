@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($patients as $patient)
    <ul>
        <li>
            <a href="/patients/{{ $patient->username }}" > {{ $patient->name }}</a>
        </li>
    </ul>
    @endforeach
@endsection
 


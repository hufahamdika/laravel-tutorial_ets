@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>

    <div class="container">
      <div class="row">
        @foreach($doctors as $doctor)
        <div class="col-md-4 mb-4">
          <a href="/doctors/{{ $doctor->username }}">
            <div class="card bg-dark text-white">
              <img class="card-img" src="https://source.unsplash.com/random/600x600?{{ $doctor->name }}" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title-center text-center flex-fill p-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $doctor->name }}</h5>
                {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p> --}}
              </div>
            </div>
          </a>     
        </div>
        @endforeach 
      </div>
    </div>
@endsection
 


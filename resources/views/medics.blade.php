@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>

    <div class="card mb-3">
        <img src="https://source.unsplash.com/random/1200x400?{{ $medics[0]->doctor->name }}" class="card-img-top" alt="{{ $medics[0]->doctor->name }}">
        <div class="card-body text-center">
          <h5 class="card-title"><a href="/medics/{{ $medics[0]->slug }}" class="text-decoration-none text-dark">{{ $medics[0]->title }}</a></h5>
          <h6><small class="text-muted">
              By: <a href="/patients/{{ $medics[0]->patient->username }}" class="text-decoration-none">{{ $medics[0]->patient->name }}</a> in 
              <a href="/categories/{{ $medics[0]->doctor->slug }}" class="text-decoration-none">{{ $medics[0]->doctor->name }}</a></small></h6>
              <p><small class="text-muted">{{ $medics[0]->created_at->diffForHumans() }}</small></p>
          <a href="/medics/{{ $medics[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($medics->skip(1) as $medic)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/categories/{{ $medic->doctor->slug }}" 
                        class="text-decoration-none text-white">{{ $medic->doctor->name }}</a></div>
                    <img class="card-img-top" src="https://source.unsplash.com/random/1200x800?{{ $medic->doctor->name }}" alt="{{ $medic->doctor->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/medics/{{ $medic->slug }}" class="text-decoration-none text-dark"> {{ $medic->title }}</a> </h5>
                        <h6><small class="text-muted">
                            By: <a href="/patients/{{ $medic->patient->username }}" class="text-decoration-none">{{ $medic->patient->name }}</a> in 
                            <a href="/categories/{{ $medic->doctor->slug }}" class="text-decoration-none">{{ $medic->doctor->name }}</a></small></h6>
                            <p><small class="text-muted">{{ $medic->created_at->diffForHumans() }}</small></p>
                        <a href="/medics/{{ $medic->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
 


@extends('layouts.template')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-mg-8">
            <article class="mb-5">
                <h3>{{ $medic->title }}</h3>
            
                <h6 class="mb-3">By: <a href="/patients/{{ $medic->patient->username }}" class="text-decoration-none">{{ $medic->patient->name }} </a> in <a href="/doctors/{{ $medic->category->slug }}" 
                    class="text-decoration-none">{{ $medic->doctor->name }}</a></h6>

                <img class="card-img-top" src="https://source.unsplash.com/random/1200x400?{{ $medic->doctor->name }}" alt="{{ $medic->doctor->name }}"
                    class="image-fluid">
            
                <p class="my-3">{!! $medic->body !!}</p>
            
                <a href="/medics" class="text-decoration-none">Return to Medical Records</a>
            </article>
        </div>
    </div>
</div>

@endsection

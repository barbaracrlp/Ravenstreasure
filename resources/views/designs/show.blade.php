@extends('template')

@section('content')
    <div class="container">
        <h1>{{ $design->name }}</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ $design->full_file_path }}"  class="card-img-top" alt="{{ $design->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $design->name }}</h5>
                {{-- <p class="card-text">{{ $design->description }}</p> --}}
                <p class="card-text">{{ $design->price }} €</p>
                <p class="card-text">Stock: {{ $design->stock }}</p>
                <p class="card-text">Expires on: {{ $design->expiration }}</p>
                <a href="{{ route('designs.index') }}" class="btn btn-primary">Back to Designs</a>
            </div>
        </div>
    </div>
@endsection

<!-- resources/views/designs/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Design Details</h1>
        <div>
            <h2>{{ $design->name }}</h2>
            <p>Designer: {{ $design->designer->name }}</p>
            <p>Category: {{ $design->category->name }}</p>
            <p>Type: {{ $design->type->name }}</p>
            <p>Price: {{ $design->price }}</p>
            <p>Stock: {{ $design->stock }}</p>
            @if($design->image)
                <p><img src="{{ asset('storage/' . $design->image) }}" alt="{{ $design->name }}" width="200"></p>
            @endif
        </div>
        <a href="{{ route('designs.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection

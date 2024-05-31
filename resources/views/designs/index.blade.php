<!-- resources/views/designs/index.blade.php -->
@extends('template')

@section('content')
    <div class="container">
        <h1>Designs</h1>
        @foreach ($designs as $design)
            {{-- <tr>
                <td>{{ $design->id }}</td>
                <td>{{ $design->name }}</td>
                <td>{{ $design->designer->name }}</td>
                <td>{{ $design->category->name }}</td>
                <td>{{ $design->price }}</td>
                <td> --}}

                    <div class="card" style="width: 18rem;">
                        <img src="{{ $design->full_file_path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $design->name }}</h5>
                            <h6 class="card-text">{{ $design->price }} €</h5>

                                <a href="{{ route('designs.show', ['design' => $design->id]) }}" class="btn btn-success">View</a>
                        </div>
                    </div>
        @endforeach
    </div>
@endsection

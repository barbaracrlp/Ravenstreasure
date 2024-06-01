
@extends('template')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($designs as $design)
            <div class="col-md-4">
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="{{ Storage::url($design->file_path) }}" class="card-img-top" alt="{{ $design->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $design->name }}</h5>
                            <h6 class="card-text">{{ $design->price }} €</h6>
                            <p class="card-text"><b>Type:</b> {{ $design->type->name ?? 'N/A' }}</p>
                            <p class="card-text"><b>Collection:</b> {{ $design->collection->name ?? 'N/A' }}</p>
                            <p class="card-text">
                                @foreach ($design->categories as $category)
                                    {{ $category->name }}@if (!$loop->last), @endif
                                @endforeach
                            </p>
                            <a href="{{ route('designs.show', ['design' => $design->id]) }}" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


<!-- resources/views/designs/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Designs</h1>
        <a href="{{ route('designs.create') }}" class="btn btn-primary">Add Design</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designer</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($designs as $design)
                    <tr>
                        <td>{{ $design->id }}</td>
                        <td>{{ $design->name }}</td>
                        <td>{{ $design->designer->name }}</td>
                        <td>{{ $design->category->name }}</td>
                        <td>{{ $design->price }}</td>
                        <td>
                            <a href="{{ route('designs.show', $design->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('designs.edit', $design->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('designs.destroy', $design->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

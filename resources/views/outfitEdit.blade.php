@extends('layouts.app2')
@section('content')
<div class="container mt-4">
    <a href="{{ url('home') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <br><br>
    <h1>Edit Outfit</h1>
    <form method="post" action="{{ route('outfitUpdate', $outfit->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="outfit_name" class="form-label">Outfit Name:</label>
            <input type="text" class="form-control" name="outfit_name" value="{{ old('outfit_name', $outfit->outfit_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Size:</label>
            <input type="text" class="form-control" name="size" value="{{ old('size', $outfit->size) }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" name="price" value="{{ old('price', $outfit->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" class="form-control" name="stock" value="{{ old('stock', $outfit->stock) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

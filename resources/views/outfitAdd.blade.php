@extends('layouts.app2')
@section('content')
<div class="container mt-4">
    <a href="{{ url('home') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <br><br>
    <h1>Add Outfit</h1>
    <form method="post" action="{{ url('/outfit') }}">
        @csrf
        <div class="mb-3">
            <label for="outfit_name" class="form-label">Outfit Name:</label>
            <input type="text" class="form-control" name="outfit_name" required>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Size:</label>
            <input type="text" class="form-control" name="size" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" name="price" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" class="form-control" name="stock" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

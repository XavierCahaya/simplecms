@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>List Outfit</h1>
    <a href="{{ url('outfitAdd') }}" class="btn btn-primary">Add Outfit</a>
    <table class="table">
        <thead>
            <tr>
                <th>Outfit ID</th>
                <th>Outfit Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($outfit as $cosplay)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $cosplay->outfit_name }}</td>
                    <td>{{ $cosplay->size }}</td>
                    <td>{{ $cosplay->price }}</td>
                    <td>{{ $cosplay->stock }}</td>
                    <td>
                        <a href="{{ route('outfitEdit', $cosplay->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('outfitDelete', $cosplay->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection

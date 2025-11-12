@extends('layout.main')
@section('content')
<table class="table">
    <tr>
        <th scope="col">Name</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th scope="col">Price</th>
        <td>{{ $item->price }}</td>
    </tr>
    <tr>
        <th scope="col">Description</th>
        <td>{{ $item->description }}</td>
    </tr>
    <tr>
        <th scope="col">Stock</th>
        <td>{{ $item->stock }}</td>
    </tr>
</table>
@endsection
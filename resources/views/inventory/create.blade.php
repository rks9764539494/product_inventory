@extends('layout.main')
@section('content')
<form action="{{ route('inventory.store') }}" method="POST">
    @csrf
    <div class="mb-3" >
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
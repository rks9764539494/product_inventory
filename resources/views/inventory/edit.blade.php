@extends('layout.main')
@section('content')
<form action="{{ route('inventory.update',$item->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3" >
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ $item->name }}" class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" value="{{ $item->price }}" class="form-control" name="price" id="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description">{{ $item->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" value="{{ $item->stock }}" class="form-control" name="stock" id="stock">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
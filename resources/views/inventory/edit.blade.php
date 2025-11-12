@extends('layout.main')
@section('content')
<form action="{{ route('inventory.update',$item->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3" >
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{ $item->name }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp">
        @error('name')
            <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" value="{{ $item->price }}" class="form-control @error('price') is-invalid @enderror" name="price" id="price">
        @error('price')
            <div id="priceHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ $item->description }}</textarea>
        @error('description')
            <div id="descriptionHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" value="{{ $item->stock }}" class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock">
        @error('stock')
            <div id="stockHelp" class="form-text text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
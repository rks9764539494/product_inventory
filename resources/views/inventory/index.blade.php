@extends('layout.main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @forelse ($inventories as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->stock }}</td>
                <td>
                    <a href="{{ route('inventory.edit',$item->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('inventory.show',$item->id) }}" class="btn btn-info">View</a>
                    <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
            
        @empty
            <tr>
                <td colspan='5' class="text-danger">Empty list...</td>
            </tr>
        @endforelse
        </tr>
        
    </tbody>
</table>
{{-- {{ $inventories->links() }} --}}
@endsection
@section("flash_message")
<span class="text-success"> {{ Session::get('success') }} </span>
@endsection
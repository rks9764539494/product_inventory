@extends('layout.main')
@section('content')
    {{ Form::model($item, ['route' => ['inventory.update', $item->id],'method'=>'post']) }}
    @csrf
    @include('inventory.form')
    <button type="submit" class="btn btn-primary">Save</button>   
    {!! Form::close() !!}
@endsection
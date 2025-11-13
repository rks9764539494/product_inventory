@extends('layout.main')
@section('content')
    {{ Form::model(null,['route' => ['inventory.store','method'=>'post']]) }}
    @csrf
    @include('inventory.form')
    <button type="submit" class="btn btn-primary">Create</button>   
    {!! Form::close() !!}
@endsection
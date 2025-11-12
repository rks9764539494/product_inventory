@extends('layout.main')
@section('content')
    {{ Form::model(['route' => ['inventory.store','method'=>'post']]) }}
    @csrf
    @include('inventory.form')
    <button type="submit" class="btn btn-primary">Create</button>   
    {!! Form::close() !!}
@endsection
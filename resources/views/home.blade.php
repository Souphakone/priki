@extends('layout')

@section('content')
    <h1>Hello</h1>
    @foreach ($roles as $role)
        <p>{{ $role->name }}</p>
    @endforeach
@endsection
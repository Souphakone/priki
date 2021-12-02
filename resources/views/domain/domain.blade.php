@extends('layout')

@section('content')
    <h1>Domain</h1>
    @foreach ($domains as $domain)
        <p>{{ $domain->name }}</p>
    @endforeach
@endsection
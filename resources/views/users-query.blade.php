@extends('layouts.layout')
@section('content')
    <p>Select query example</p>
    @foreach ($users as $user)
        <div>{{ $user->name }}</div>
        <div>{{ $user->email }}</div>
    @endforeach
@endsection

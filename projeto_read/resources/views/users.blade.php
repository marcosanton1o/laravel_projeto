@extends('master')

@section('content')

<a href="{{ route('users.create') }}">Create</a>

<h2>user</h2>

@foreach ($users as $user)
            <li>{{ $user->name }} | <a href="{{ route('users.edit',['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a></li>
        @endforeach

@endsection

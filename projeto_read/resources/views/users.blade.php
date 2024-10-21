@extends('master')

@section('content')

<h2>user</h2>
    @section('content')

@foreach ($users as $user)
            <li>{{ $user->name }} | <a href="{{ route('users.edit',['user' => $user->id]) }}">Edit</a> | <a href="">Delete</a></li>
        @endforeach

@endsection

@extends('master')

@section('content')

<h2>user</h2>
    @section('content')

@foreach ($users as $user)
            <li>{{ $user->nome }}</li>
        @endforeach

@endsection

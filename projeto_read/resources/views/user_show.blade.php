@extends('master')

@section('content')

<h2>Delete</h2>

<h2> {{ $user->name }} </h2>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">

    <button type="submit">Delete</button>
</form>

@endsection
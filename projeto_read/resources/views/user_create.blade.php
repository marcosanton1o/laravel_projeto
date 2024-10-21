@extends('master')

@section('content')

<h2>Criar</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

@if ($errors->any())
    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="password">

    <button type="submit">criar</button>
</form>

@endsection
@extends('layouts.fe')


@section('content')
    <h1>Olá, sou um user</h1>

    <h3>Nome: {{ $user->name }}</h3>
    <h3>Email: {{ $user->email }}</h3>
    <h3>Email: {{ $user->password }}</h3>
@endsection

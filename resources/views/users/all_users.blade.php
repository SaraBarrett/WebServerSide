@extends('layouts.fe')

@section('content')
    <h1>Olá, aqui tens uma lista de todos os users.</h1>

    {{ $cesaeInfo['name'] }}

    <h5>Nomes</h5>
    <ul>
        @foreach ($allUsers as $user)
            <li>{{ $user[1] }} e o telefone é {{ $user[2] }}</li>
        @endforeach
    </ul>
@endsection

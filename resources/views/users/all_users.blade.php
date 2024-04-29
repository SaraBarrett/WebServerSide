@extends('layouts.fe')

@section('content')
    <h1>Olá, aqui tens uma lista de todos os users.</h1>
    <h5>Delegado de turma: {{ $delegadoTurma->name }}: {{ $delegadoTurma->email }}{{ $delegadoTurma->id }}</h5>

    {{ $cesaeInfo['name'] }}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($allUsers as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{route('users.view', $user->id)}}" class="btn btn-info">Ver</a></td>
                    <td><a href="{{route('users.delete', $user->id)}}" class="btn btn-danger">Apagar</a></td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

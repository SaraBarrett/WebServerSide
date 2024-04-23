@extends('layouts.fe')

@section('content')
    <h1>Olá, aqui tens uma lista de todos os users.</h1>

    {{ $cesaeInfo['name'] }}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($allUsers as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

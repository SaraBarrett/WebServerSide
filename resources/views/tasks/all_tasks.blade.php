@extends('layouts.fe')

@section('content')
    <h4>Tarefas</h4>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Tarefa</th>
                <th scope="col">Responsável da Tarefa</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $key)
                <tr>
                    <th scope="row">{{ $key->id }}</th>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->usname }}</td>
                    <td>{{ $key->description }}</td>
                    <td><a class="btn btn-info" href="{{route('tasks.edit',$key->id )}}">Ver / Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

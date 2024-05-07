@extends('layouts.fe')

@section('content')
    <h3>Adicionar Tarefa</h3>
    <form action="{{ route('tasks.create') }}" method="POST">
        @csrf
        <input name="id" type="hidden" value="{{ $task->id }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input name="name" value="{{ $task->name }}" type="text" class="form-control" id=""
                aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="text" name="description" value="{{ $task->description }}" class="form-control"
                id="exampleInputPassword1">
            @error('description')
                description inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Utilizador</label>
            <select name="user_id" id="">
                @foreach ($allUsers as $user)
                    <option @if ($user->id == $task->user_id) selected @endif value="{{ $user->id }}">
                        {{ $user->name }}</option>
                @endforeach


            </select>
            @error('user_id')
                user_id inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prazo</label>
            <input name="due_at" value="{{ $task->due_at }}" type="date" class="form-control" id=""
                aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

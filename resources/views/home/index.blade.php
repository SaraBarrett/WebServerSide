@extends('layouts.fe')

@section('content')
    <h4>Olá, estou em casa!</h4>
    <img class="test-img" src="{{ asset('images/assesement.jpeg') }}" alt="" sizes="" srcset="">
    <ul>
        <a href="{{ route('home.welcome') }}">
            <li>Welcome</li>
        </a>
        <a href="{{ route('home.hello') }}">
            <li>Hello</li>
        </a>
        <a href="{{ route('users.all') }}">
            <li>
                Users</li>
        </a>
        <a href="{{ route('tasks.all') }}">
            <li>
                tarefas</li>
        </a>
    </ul>
@endsection

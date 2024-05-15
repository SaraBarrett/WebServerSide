@extends('layouts.fe')

@section('content')
    <h3>Olá {{ Auth::user()->name }}</h3>

    @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
        <div class="alert alert-success">
            és uma admin, yay. tens super poderes.

        </div>
    @endif
@endsection

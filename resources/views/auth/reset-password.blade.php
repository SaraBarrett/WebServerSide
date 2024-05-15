@extends('layouts.fe')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="{{ request()->email }}" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('email')
                erro de email
            @enderror
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                erro de pass
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password_confirmation" value="" type="password" class="form-control"
                id="exampleInputPassword1">
            @error('password')
                erro de pass
            @enderror
        </div>
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <button type="submit" class="btn btn-primary">Update Pass</button>
    </form>
@endsection

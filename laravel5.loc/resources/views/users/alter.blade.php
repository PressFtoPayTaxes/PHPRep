@extends('layouts.app')

@section("content")

        <div style="width: 80%; margin: auto;">

        <h2>{{ !isset($user) ? "Create new user" : "Edit user {$user->id}"}}</h2>

        <form action="{{ route( (!isset($user) ? "users.store" : "users.update"), $user ?? "") }}" method="post">
            @csrf

            @if(isset($user))
                @method('PUT')
            @endif

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" value="{{ $user->username ?? "" }}">
            </div>

            @if(!isset($user))
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password">
                </div>
                @else
                    <input type="hidden" name="password" value="{{ $user->password }}">
            @endif

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

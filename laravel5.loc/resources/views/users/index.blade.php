@extends("layouts.app")

@section('content')

    <div style="width: 80%; margin:auto;">

        @if(\Illuminate\Support\Facades\Auth::user()->superadmin)
            <a class="btn btn-primary" href="{{ route("users.create") }}">Create</a>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td style="width: 15%;">
                            <form action="{{ route("users.destroy", $user) }}" method="post">
                                <a class="btn btn-primary" href="{{ route("users.edit", $user) }}">Edit</a>

                                @csrf
                                @method("DELETE")

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>
    </div>

@endsection

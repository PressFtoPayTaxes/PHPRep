@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Description</th>
                <th>Year</th>
                <th>Pages Count</th>
                <th>Rating</th>
                <th>Is in Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books ?? [] as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->pages_count }}</td>
                    <td>{{ $book->rating }}</td>
                    <td>{{ $book->is_in_stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

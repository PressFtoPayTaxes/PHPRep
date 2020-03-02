@extends('layouts.app')

@section('content')
    <table class="table table-bordered">
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
                <th>Actions</th>
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
                    <td>{{ $book->is_in_stock ? 'Yes' : 'No' }}</td>
                    <td nowrap style="width: 15%;">
                        <a href="{{ route('books.show', $book) }}">More...</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Edit</a>
                        <form id="delete" action="{{ route('books.destroy', $book) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <a class="btn btn-primary" href="{{ route('books.create') }}">Add Book</a>
    </div>
@endsection

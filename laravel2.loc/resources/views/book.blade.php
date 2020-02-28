@extends('layouts.app')

@section('content')
    <div class="container w-25">
        @component('components.book_card', ['book' => $book])
            {{ $book->description }}
        @endcomponent
    </div>
@endsection

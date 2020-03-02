@extends('layouts.app')

@section('content')
    <div class="container">
        @include('blocks.errors')
        @component('components.form', [
            'action' => $action ?? '',
            'book' => $book ?? new \App\Book(),
            'method' => $method ?? ''
        ])
            {{ $book->description ?? '' }}
        @endcomponent
    </div>
@endsection

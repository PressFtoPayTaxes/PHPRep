<div class="card">
    <p><b>Name: </b>{{ $book->name }}</p>
    <p><b>Author: </b>{{ $book->author }}</p>
    <p><b>Year: </b>{{ $book->year }}</p>
    <p><b>Pages Count: </b>{{ $book->pages_count }}</p>
    <p><b>Rating: </b>{{ $book->rating }}</p>
    <p><b>In Stock: </b>{{ $book->is_in_stock ? 'yes' : 'no' }}</p>
    <p><b>Description:</b></p>
    <p>{{ $slot }}</p>
</div>

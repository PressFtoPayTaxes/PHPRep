<form action="{{ route($action != '' ? $action : 'books.store', $book)}}" method="post">
    @csrf
    @if($method != '')
        @method($method)
    @endif

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $book->name ?? '' }}">
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control" value="{{ $book->author ?? '' }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" rows="10">{{ $slot }}</textarea>
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <input type="number" name="year" class="form-control" value="{{ $book->year ?? '' }}">
    </div>

    <div class="form-group">
        <label for="pages_count">Pages Count</label>
        <input type="number" name="pages_count" class="form-control" value="{{ $book->pages_count ?? '' }}">
    </div>

    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="number" name="rating" class="form-control" value="{{ $book->rating ?? '' }}">
    </div>

    <div class="form-group">
        <input type="checkbox" name="is_in_stock" value="1" class="form-check-input" {{ $book->is_in_stock ?? false ? 'checked' : '' }}>
        <label for="is_in_stock" class="form-check-label">Is in Stock</label>
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
</form>

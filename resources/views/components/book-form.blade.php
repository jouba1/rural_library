<form action="{{ $action }}" method="POST">
    @csrf

    @isset($method)
        @method($method)
    @endisset

    <!-- Title Field -->
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title ?? '') }}">
    </div>

    <!-- Author Field -->
    <div>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author', $book->author ?? '') }}">
    </div>

    <!-- Publisher Field -->
    <div>
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}">
    </div>

    <!-- Published Year Field -->
    <div>
        <label for="published_year">Published Year:</label>
        <input type="text" id="published_year" name="published_year" value="{{ old('published_year', $book->published_year ?? '') }}">
    </div>

    <!-- Category Field -->
    <div>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category', $book->category ?? '') }}">
    </div>

    <!-- Add more form fields as needed -->

    <!-- Submit Button -->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

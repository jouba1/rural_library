@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <h1>Books</h1>

    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>
    <br>
    <hr>
    @if ($books->isEmpty())
        <p>No books found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Published Year</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>{{ $book->category }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-primary">Edit</a>

                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

<!-- resources/views/borrowings/edit.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <h1>Edit Borrowing</h1>

    <form action="{{ route('borrowings.update', $borrowing) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Book -->
        <div>
            <label for="book_id">Book:</label>
            <select name="book_id" id="book_id">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $book->id === $borrowing->book_id ? 'selected' : '' }}>
                        {{ $book->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Member -->
        <div>
            <label for="member_id">Member:</label>
            <select name="member_id" id="member_id">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" {{ $member->id === $borrowing->member_id ? 'selected' : '' }}>
                        {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Borrowed At -->
        <div>
            <label for="borrowed_at">Borrowed At:</label>
            <input type="date" name="borrowed_at" id="borrowed_at" value="{{ $borrowing->borrowed_at }}">
        </div>

        <!-- Returned At -->
        <div>
            <label for="returned_at">Returned At:</label>
            <input type="date" name="returned_at" id="returned_at" value="{{ $borrowing->returned_at }}">
        </div>

        <button type="submit">Update Borrowing</button>
    </form>
@endsection

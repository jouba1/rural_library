@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <div class="container">
        <h1>Borrow a Book</h1>

        <form action="{{ route('borrowings.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="book_id" class="form-label">Select Book</label>
                <select class="form-select" id="book_id" name="book_id" required>
                    <option selected disabled>Select Book</option>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="member_id" class="form-label">Select Member</label>
                <select class="form-select" id="member_id" name="member_id" required>
                    <option selected disabled>Select Member</option>
                    @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="borrowed_at" class="form-label">Borrowed Date</label>
                <input type="date" class="form-control" id="borrowed_at" name="borrowed_at" required>
            </div>

            <button type="submit" class="btn btn-primary">Borrow</button>
            <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

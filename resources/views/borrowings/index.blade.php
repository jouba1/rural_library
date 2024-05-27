@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
{{-- <h1>Borrowings</h1> --}}

{{-- <a href="{{ route('borrowings.create') }}" class="btn btn-primary mb-3">Add New Borrowing</a> --}}
<a href="{{ route('borrowings.create') }}" class="btn btn-sm btn-primary">Issue Book </a>
@if ($borrowings->isEmpty())
    <p>No borrowings found.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Member Name</th>
                <th>Borrowed At</th>
                <th>Returned At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->book->title }}</td>
                    <td>{{ $borrowing->member->name }}</td>
                    <td>{{ $borrowing->borrowed_at }}</td>
                    <td>{{ $borrowing->returned_at ?? 'Not returned yet' }}</td>
                    <td>
                        <a href="{{ route('borrowings.edit', $borrowing) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('borrowings.destroy', $borrowing) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this borrowing?')">Delete</button>
                        </form>
                        @if ($borrowing->returned_at === null)
                            <form action="{{ route('borrowings.update', $borrowing) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection

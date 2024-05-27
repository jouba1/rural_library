<!-- resources/views/members/index.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <h1>Members</h1>

    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Add New Member</a>

    @if ($members->isEmpty())
        <p>No members found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>IC No</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->ic_no }}</td>
                        <td>{{ $member->address }}</td>
                        <td>{{ $member->contact }}</td>
                        <td>
                            <a href="{{ route('members.edit', $member) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('members.destroy', $member) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

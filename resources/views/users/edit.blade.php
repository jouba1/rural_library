<!-- resources/views/users/edit.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="is_supervisor">Is Supervisor?</label>
                <select name="is_supervisor" id="is_supervisor" class="form-control">
                    <option value="0" {{ $user->is_supervisor == 0 ? 'selected' : '' }}>No</option>
                    <option value="1" {{ $user->is_supervisor == 1 ? 'selected' : '' }}>Yes</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
